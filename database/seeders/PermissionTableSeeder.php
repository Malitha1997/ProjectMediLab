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

           'patient-list',

           'patient-create',

           'patient-edit',

           'patient-delete',

           'patient-navbar',

           'doctor-list',

           'doctor-create',

           'doctor-edit',

           'doctor-delete',

           'lab_assistant-list',

           'lab_assistant-create',

           'lab_assistant-edit',

           'lab_assistant-delete',


        ];



        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}
