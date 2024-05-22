<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Lineas de spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;


class RolesPermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'crear clase']);
        Permission::create(['name' => 'Pasar Lista']);
        Permission::create(['name' => 'Crear Convivio']);
        Permission::create(['name' => 'Ver asistencia']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'alumno']);
        $role1->givePermissionTo('Ver asistencia');
        $role1->givePermissionTo('Crear Convivio');
     

        $role2= Role::create(["name"=>"maestro"]);
        $role2->givePermissionTo('crear clase');
        $role2->givePermissionTo('Pasar Lista');
        $role2->givePermissionTo('Crear Convivio');
        $role2->givePermissionTo('Ver asistencia');

    }
}
