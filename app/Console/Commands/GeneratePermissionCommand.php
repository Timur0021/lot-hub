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
            ->map(fn ($file) => $file->getFilenameWithoutExtension());

        $actions = [
            'view',
            'create',
            'update',
            'delete',
        ];

        foreach ($models as $model) {
            $name = strtolower($model);

            foreach ($actions as $action) {
                $permissionName = "{$name}.{$action}";

                Permission::query()
                    ->firstOrCreate([
                        'name' => $permissionName,
                        'guard_name' => 'admin',
                    ]);
            }
        }

        $this->info('Permissions generated successfully.');
    }
}
