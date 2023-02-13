<?php



namespace Database\Seeders;



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

           'role-edit',

           'role-delete',

           'role-navbar',

           'Patient-list',

           'Patient-create',

           'Patient-edit',

           'Patient-delete',

           'patient-navbar',

           'Admin-index',

           'Admin-create',

           'Doctor-create',

           'Doctor-list',

           'doctor-edit',

           'doctor-delete',



        ];



        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}
