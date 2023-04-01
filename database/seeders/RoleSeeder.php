<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $roladmin = Role::create(['name' => 'admin']);
        $roluser = Role::create(['name' => 'user']);

        Permission::create(['name' => 'home'])->assignRole($roladmin);
        Permission::create(['name' => 'Usuarios'])->assignRole($roluser);
        Permission::create(['name' => 'Compras'])->assignRole($roladmin);
    

}
}
