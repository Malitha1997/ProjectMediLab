<?php



namespace Database\Seeders;



use Illuminate\Database\Seeder;

use App\Models\User;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;



class CreateAdminUserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = User::create([

            'f_name' => 'Admin',
            'l_name' => 'MediLab',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $user = User::create([

            'f_name' => 'Doctor',
            'l_name' => 'MediLab',
            'email' => 'doctor@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([

            'f_name' => 'Lab Assistant',
            'l_name' => 'MediLab',
            'email' => 'labassistant@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        /*$patient = Patient::create([

            'f_name' => 'Patient 01',
            'l_name' => 'MediLab',
            'email' => 'patient01@gmail.com',
            'password' => bcrypt('12345678'),
            'street_no'=>'10',
            'city'=>'Ratnapura',
            'age'=>'25',
            'tel_no'=>'0711491492',
            'nic'=>'972992445v',
            'blood_group'=>'A+'
        ]);*/




        $role = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Doctor']);
        $role3 = Role::create(['name' => 'Lab Assistant']);



        $permissions = Permission::pluck('id','id')->all();



        $role->syncPermissions($permissions);



        $user->assignRole([$role->id]);

    }

}
