<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $mesero = Role::create(['name' => 'mesero']);
        $cajero = Role::create(['name' => 'cajero']);


        Permission::create(['name' => 'gestionar pedidos']);
        Permission::create(['name' => 'gestionar mesas']);
        Permission::create(['name' => 'ver reportes']);
        Permission::create(['name' => 'gestionar inventario']);


        $admin->givePermissionTo(Permission::all());
        $mesero->givePermissionTo(['gestionar pedidos', 'gestionar mesas']);
        $cajero->givePermissionTo(['gestionar pedidos', 'ver reportes']);


        $user = User::find(1);
        if ($user) {
            $user->assignRole('admin');
        }

    }
}
