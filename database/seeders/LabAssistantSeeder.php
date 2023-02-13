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
            'user_id' => 8,
            'address_line1' => 'No.18',
            'address_line2' => 'Batuhena',
            'address_line3' => 'Ratnapura',
            'telno' => '0754552451',
            'nic' => '933234252v',
            'age' => '29',
            'qualification'=> 'Successfully completed BSc degree'
         ]);

        DB::table('lab_assistants')->insert([
            'user_id' => 9,
            'address_line1' => 'No.8',
            'address_line2' => 'Kebithigollawa',
            'address_line3' => 'Anuradhapura',
            'telno' => '0714552451',
            'nic' => '933234422v',
            'age' => '29',
            'qualification'=> 'Successfully completed BSc degree'
         ]);

        DB::table('lab_assistants')->insert([
            'user_id' => 10,
            'address_line1' => 'No.5',
            'address_line2' => 'Angammana',
            'address_line3' => 'Ratnapura',
            'telno' => '0724542451',
            'nic' => '943134425v',
            'age' => '28',
            'qualification'=> 'Successfully completed Chemeistry in special degree'
         ]);

        DB::table('lab_assistants')->insert([
            'user_id' => 11,
            'address_line1' => 'No.9/A',
            'address_line2' => 'Thawalanthenna',
            'address_line3' => 'Nuwaraeliya',
            'telno' => '0784542452',
            'nic' => '903134425v',
            'age' => '33',
            'qualification'=> 'Successfully completed Chemeistry in special degree'
         ]);
    }
}
