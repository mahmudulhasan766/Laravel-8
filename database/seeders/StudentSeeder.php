<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Students')->insert([
            [
                'name' => 'hasan',
                'email' => 'hasan@gmail.com',
                'phone' => '01956565756',
                'address' => 'badda,dhaka',
            ],
            [
                'name' => 'babu',
                'email' => 'babu@gmail.com',
                'phone' => '01956569556',
                'address' => 'badda,dhaka',
            ],
            [
                'name' => 'mamun',
                'email' => 'mamun@gmail.com',
                'phone' => '01923565756',
                'address' => 'uttara,dhaka',
            ],
            [
                'name' => 'asif',
                'email' => 'asif@gmail.com',
                'phone' => '01956925756',
                'address' => 'badda,dhaka',
            ],
            [
                'name' => 'sojib',
                'email' => 'sojib@gmail.com',
                'phone' => '01316565756',
                'address' => 'tongi,dhaka',
            ],
        ]);
    }
}
