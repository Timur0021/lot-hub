<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

#[Signature('permissions:set-role-permissions')]
#[Description('Command description')]
class SetRolePermissionsCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $superAdmin = Role::findByName('super-admin', 'admin');
        $permissions = Permission::all();

        $superAdmin->givePermissionTo($permissions);

        $this->info('Permissions assigned to super-admin successfully');
    }
}
