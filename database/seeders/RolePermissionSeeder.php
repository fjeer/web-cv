<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permissions for each model
        $models = ['berita', 'event', 'galeri', 'kursus', 'kelas', 'kategori', 'layanan', 'mitra', 'sublayanan', 'training', 'user'];

        $actions = ['view', 'create', 'edit', 'delete'];

        $permissions = [];

        foreach ($models as $model) {
            foreach ($actions as $action) {
                $permissions[] = $action . '_' . $model;
            }
        }

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles and assign permissions
        $superadmin = Role::firstOrCreate(['name' => 'Superadmin']);
        $superadmin->givePermissionTo(Permission::all());

        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $adminPermissions = [];
        foreach ($models as $model) {
            if ($model !== 'user') { // Admin can't delete users or manage sensitive data
                $adminPermissions = array_merge($adminPermissions, [
                    'view_' . $model,
                    'create_' . $model,
                    'edit_' . $model,
                ]);
                if ($model !== 'user') {
                    $adminPermissions[] = 'delete_' . $model;
                }
            } else {
                $adminPermissions = array_merge($adminPermissions, [
                    'view_' . $model,
                    'create_' . $model,
                    'edit_' . $model,
                ]);
            }
        }
        $admin->givePermissionTo($adminPermissions);

        $redaksi = Role::firstOrCreate(['name' => 'Redaksi']);
        $redaksiPermissions = [
            'view_berita', 'create_berita', 'edit_berita', 'delete_berita',
            'view_event', 'create_event', 'edit_event', 'delete_event',
            'view_galeri', 'create_galeri', 'edit_galeri', 'delete_galeri',
        ];
        $redaksi->givePermissionTo($redaksiPermissions);
    }
}