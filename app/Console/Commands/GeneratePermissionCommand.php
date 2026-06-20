<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Permission;

#[Signature('permissions:generate')]
#[Description('Generate permissions for all models')]
class GeneratePermissionCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $modelPath = app_path('Models');

        $models = collect(File::allFiles($modelPath))
            ->map(fn ($file) => $file->getPathname())
            ->map(fn ($path) => $this->getClassFromFile($path))
            ->filter()
            ->unique()
            ->values();

        $actions = [
            'view',
            'create',
            'update',
            'delete',
        ];

        $existing = Permission::query()
            ->pluck('name')
            ->toArray();

        foreach ($models as $model) {
            $name = strtolower(class_basename($model)) . 's';

            foreach ($actions as $action) {
                $permissionName = "{$name}.{$action}";

                if (in_array($permissionName, $existing, true)) {
                    continue;
                }

                Permission::query()
                    ->firstOrCreate([
                        'name' => $permissionName,
                        'guard_name' => 'admin',
                    ]);
            }
        }

        $this->info('Permissions generated successfully.');
    }

    private function getClassFromFile(string $path): ?string
    {
        $content = file_get_contents($path);

        preg_match('/namespace\s+(.+?);/', $content, $ns);
        preg_match('/class\s+(\w+)/', $content, $class);

        if (!isset($ns[1], $class[1])) {
            return null;
        }

        return $ns[1] . '\\' . $class[1];
    }
}
