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
            'speciality' => 'Kidney',
            'qualification'=> 'PHd done'

         ]);
    }
}
