<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LabAssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lab_assistants')->insert([
            'user_id' => 7,
            'house_no' => '8',
            'street_no' => '29',
            'city' => 'Neluwa',
            'telno' => '0714552451',
            'nic' => '933234422v',
            'age' => '29',
            'qualification'=> 'Successfully completed BSc degree'
         ]);

        DB::table('lab_assistants')->insert([
            'user_id' => 8,
            'house_no' => '88',
            'street_no' => '9',
            'city' => 'Nawalapitiya',
            'telno' => '0724542451',
            'nic' => '943134425v',
            'age' => '28',
            'qualification'=> 'Successfully completed Chemeistry in special degree'
         ]);

        DB::table('lab_assistants')->insert([
            'user_id' => 9,
            'house_no' => '98',
            'street_no' => '91',
            'city' => 'Ratnapura',
            'telno' => '0784542452',
            'nic' => '903134425v',
            'age' => '33',
            'qualification'=> 'Successfully completed Chemeistry in special degree'
         ]);
    }
}
