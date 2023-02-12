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
            'address_line1' => 'No.10',
            'address_line2' => 'Akuressa',
            'address_line3' => 'Matara',
            'telno' => '0714552231',
            'nic' => '973234422v',
            'age' => '25',
            'blood_group' => 'A-',
         ]);

         DB::table('patients')->insert([
            'user_id' => 11,
            'address_line1' => 'No.15/A',
            'address_line2' => 'Hidellana',
            'address_line3' => 'Ratnapura',
            'telno' => '0458822639',
            'nic' => '953234423v',
            'age' => '27',
            'blood_group' => 'A+',
         ]);

         DB::table('patients')->insert([
            'user_id' => 12,
            'address_line1' => 'No.1',
            'address_line2' => 'Parakaduwa',
            'address_line3' => 'Eheliyagoda',
            'telno' => '0758822630',
            'nic' => '963234423v',
            'age' => '26',
            'blood_group' => 'O+',
         ]);

         DB::table('patients')->insert([
            'user_id' => 13,
            'address_line1' => 'No.5',
            'address_line2' => 'Polgahawela Road',
            'address_line3' => 'Alawwa',
            'telno' => '0758822651',
            'nic' => '983234423v',
            'age' => '24',
            'blood_group' => 'O-',
         ]);

         DB::table('patients')->insert([
            'user_id' => 14,
            'address_line1' => 'No.6/B',
            'address_line2' => 'Rambukkana',
            'address_line3' => 'Kegalle',
            'telno' => '0718822655',
            'nic' => '993234423v',
            'age' => '23',
            'blood_group' => 'B+',
         ]);
    }
}
