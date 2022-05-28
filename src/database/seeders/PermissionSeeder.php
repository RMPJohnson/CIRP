<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'product-approved',

            'client-list',
            'client-create',
            'client-edit',
            'client-delete',
            'client-approved'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
