<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'user_id' => 10,
            'house_no' => '10',
            'street_no' => '25',
            'city' => 'Alawwa',
            'telno' => '0714552231',
            'nic' => '973234422v',
            'age' => '25',
            'blood_group' => 'A-',
         ]);

         DB::table('patients')->insert([
            'user_id' => 11,
            'house_no' => '11',
            'street_no' => '2',
            'city' => 'Jaffna',
            'telno' => '0458822639',
            'nic' => '953234423v',
            'age' => '27',
            'blood_group' => 'A+',
         ]);

         DB::table('patients')->insert([
            'user_id' => 12,
            'house_no' => '51',
            'street_no' => '23',
            'city' => 'Kegalle',
            'telno' => '0758822630',
            'nic' => '963234423v',
            'age' => '26',
            'blood_group' => 'O+',
         ]);

         DB::table('patients')->insert([
            'user_id' => 13,
            'house_no' => '65',
            'street_no' => '2',
            'city' => 'Aluthgama',
            'telno' => '0758822651',
            'nic' => '983234423v',
            'age' => '24',
            'blood_group' => 'O-',
         ]);

         DB::table('patients')->insert([
            'user_id' => 14,
            'house_no' => '6',
            'street_no' => '26',
            'city' => 'Kalutara',
            'telno' => '0718822655',
            'nic' => '993234423v',
            'age' => '23',
            'blood_group' => 'B+',
         ]);
    }
}
