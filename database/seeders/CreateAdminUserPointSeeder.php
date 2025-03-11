<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Isac', 
            'email' => 'isac@point.com',
            'password' => bcrypt('23ma0199')
        ]);
        $user2 = User::create([
            'name' => 'Madalena', 
            'email' => 'madalena@point.com',
            'password' => bcrypt('23ma0199')
        ]);
        $user3 = User::create([
            'name' => 'Leilson', 
            'email' => 'leilson@point.com',
            'password' => bcrypt('23ma0199')
        ]);
        $user4 = User::create([
            'name' => 'Pamara', 
            'email' => 'pamara@point.com',
            'password' => bcrypt('Alfredina50')
        ]);
        $user5 = User::create([
            'name' => 'Carolayne', 
            'email' => 'carolayne.dayane28@gmail.com',
            'password' => bcrypt('ravifelipe')
        ]);
        $role = Role::create(['name' => 'Equipe Point']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user1->assignRole([$role->id]);
        $user2->assignRole([$role->id]);
        $user3->assignRole([$role->id]);
        $user4->assignRole([$role->id]);
        $user5->assignRole([$role->id]);
    }
}


