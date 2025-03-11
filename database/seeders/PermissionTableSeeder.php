<?php

namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-view',
            'role-edit',
            'role-delete',
            'dashboard-view',
            'sale-new',
            'sale-clock',
            'client-create',
            'client-list',
            'client-view',
            'client-edit',
            'client-delete',
            'box-control-open',
            'box-control-close',
            'type-create',
            'type-list',
            'type-view',
            'type-edit',
            'type-delete',
            'product-create',
            'product-list',
            'product-view',
            'product-edit',
            'product-delete',
            'additional-create',
            'additional-list',
            'additional-view',
            'additional-edit',
            'additional-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
