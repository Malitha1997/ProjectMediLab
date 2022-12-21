<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Doctors
        $role = Role::create(['name' => 'Doctor']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user = User::create([
            'f_name' => 'Madushan',
            'l_name' => 'Samudhika',
            'email' => 'madushan@gmail.com',
            'password' => bcrypt('madushan123'),
        ]);
        $user->assignRole('Doctor');

        //Lab assistants

        $role = Role::create(['name' => 'Lab assistant']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user = User::create([
            'f_name' => 'Priyanka',
            'l_name' => 'Chopra',
            'email' => 'priyanka@gmail.com',
            'password' => bcrypt('priyanka123'),
        ]);
        $user->assignRole('Lab assistant');

        //Patients

        $role = Role::create(['name' => 'Patient']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user = User::create([
            'f_name' => 'Nawanjana',
            'l_name' => 'Disanayake',
            'email' => 'nawanjana@gmail.com',
            'password' => bcrypt('nawanjana123'),
        ]);
        $user->assignRole('Patient');
    }
}
