<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([

            [
                'nom' => 'Geoffrey',
                'age' => '28',
                'email' => 'geoffrey@gmail.com',
                'tel' => '0494/52 32 65'
            ],
            [
                'nom' => 'Walid',
                'age' => '18',
                'email' => 'walid@gmail.com',
                'tel' => '0494/99 65 74'
            ],
            [
                'nom' => 'Jonathan',
                'age' => '25',
                'email' => 'jo@gmail.com',
                'tel' => '0497/91 14 87'
            ],
            [
                'nom' => 'Johan',
                'age' => '38',
                'email' => 'johan@gmail.com',
                'tel' => '0499/99 65 15'
            ]

        ]);
    }
}
