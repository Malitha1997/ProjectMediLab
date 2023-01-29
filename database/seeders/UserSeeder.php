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

        $user = User::create([
            'f_name' => 'Rohan',
            'l_name' => 'Sashika',
            'email' => 'rohan@gmail.com',
            'password' => bcrypt('rohan123'),
        ]);
        $user->assignRole('Doctor');

        $user = User::create([
            'f_name' => 'Niduka',
            'l_name' => 'piyumantha',
            'email' => 'niduka@gmail.com',
            'password' => bcrypt('niduka123'),
        ]);
        $user->assignRole('Doctor');

        $user = User::create([
            'f_name' => 'Abhishek',
            'l_name' => 'Premachandra',
            'email' => 'abhishek@gmail.com',
            'password' => bcrypt('abhishek123'),
        ]);
        $user->assignRole('Doctor');

        $user = User::create([
            'f_name' => 'Nishan',
            'l_name' => 'Wickramasinghe',
            'email' => 'nishan@gmail.com',
            'password' => bcrypt('nishan123'),
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

        $user = User::create([
            'f_name' => 'Ranjith',
            'l_name' => 'Somathilake',
            'email' => 'ranjith@gmail.com',
            'password' => bcrypt('ranjith123'),
        ]);
        $user->assignRole('Lab assistant');

        $user = User::create([
            'f_name' => 'Yasith',
            'l_name' => 'Piumantha',
            'email' => 'yasith@gmail.com',
            'password' => bcrypt('yasith123'),
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

        $user = User::create([
            'f_name' => 'Nihal',
            'l_name' => 'Serasinghe',
            'email' => 'nihal@gmail.com',
            'password' => bcrypt('nihal123'),
        ]);
        $user->assignRole('Patient');

        $user = User::create([
            'f_name' => 'Akarsha',
            'l_name' => 'Wimalaratne',
            'email' => 'akarsha@gmail.com',
            'password' => bcrypt('akarsha123'),
        ]);
        $user->assignRole('Patient');

        $user = User::create([
            'f_name' => 'Ranil',
            'l_name' => 'Premaratne',
            'email' => 'ranil@gmail.com',
            'password' => bcrypt('ranil123'),
        ]);
        $user->assignRole('Patient');

        $user = User::create([
            'f_name' => 'Mahinda',
            'l_name' => 'Rajapaksha',
            'email' => 'mahinda@gmail.com',
            'password' => bcrypt('mahinda123'),
        ]);
        $user->assignRole('Patient');
    }
}
