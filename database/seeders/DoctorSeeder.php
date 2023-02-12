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
            'address_line1' => 'No.10',
            'address_line2' => 'Akkeypaththuwa',
            'address_line3' => 'Jaffna',
            'telno' => '071455245',
            'nic' => '983234422v',
            'age' => '25',
            'speciality' => 'Cardiologists',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 3,
            'address_line1' => 'No.30/B',
            'address_line2' => 'Iggashena',
            'address_line3' => 'Kuruwita',
            'telno' => '077555245',
            'nic' => '91834422v',
            'age' => '26',
            'speciality' => 'Anesthesiology',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 4,
            'address_line1' => 'No.6/A',
            'address_line2' => 'Kandy Road',
            'address_line3' => 'Mawathagama',
            'telno' => '078555245',
            'nic' => '95734422v',
            'age' => '30',
            'speciality' => 'Dermatology',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 5,
            'address_line1' => 'No.8',
            'address_line2' => 'Waththegama',
            'address_line3' => 'Digana',
            'telno' => '078456782',
            'nic' => '96734422v',
            'age' => '26',
            'speciality' => 'Ophthalmologists',
            'qualification'=> 'PHd done'

         ]);

         DB::table('doctors')->insert([
            'user_id' => 6,
            'address_line1' => 'No.9',
            'address_line2' => 'Thonigala',
            'address_line3' => 'Anamaduwa',
            'telno' => '075456782',
            'nic' => '92734422v',
            'age' => '30',
            'speciality' => 'Endocrinologists',
            'qualification'=> 'PHd done,MSc done'

         ]);
    }
}
