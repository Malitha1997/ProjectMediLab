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
            'user_id' => 5,
            'house_no' => '10',
            'street_no' => '25',
            'city' => 'Ratnapura',
            'telno' => '0714552231',
            'nic' => '973234422v',
            'age' => '25',
            'blood_group' => 'A-',
         ]);
    }
}
