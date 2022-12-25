<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'user_id' => 2,
            'house_no' => '1',
            'street_no' => '26',
            'city' => 'Moratuwa',
            'telno' => '071455245',
            'nic' => '983234422v',
            'age' => '25',
            'speciality' => 'Cardiologists',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 3,
            'house_no' => '3',
            'street_no' => '20',
            'city' => 'Colombo',
            'telno' => '077555245',
            'nic' => '91834422v',
            'age' => '26',
            'speciality' => 'Anesthesiology',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 4,
            'house_no' => '5',
            'street_no' => '34',
            'city' => 'Ratnapura',
            'telno' => '078555245',
            'nic' => '95734422v',
            'age' => '30',
            'speciality' => 'Dermatology',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 5,
            'house_no' => '15',
            'street_no' => '4',
            'city' => 'Anamaduwa',
            'telno' => '078456782',
            'nic' => '96734422v',
            'age' => '26',
            'speciality' => 'Ophthalmologists',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 6,
            'house_no' => '25',
            'street_no' => '5',
            'city' => 'Naththandiya',
            'telno' => '075456782',
            'nic' => '92734422v',
            'age' => '30',
            'speciality' => 'Endocrinologists',
            'qualification'=> 'PHd done,MSc done'

         ]);
    }
}
