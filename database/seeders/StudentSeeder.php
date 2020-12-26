<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('Students')->insert([
        //     [
        //         'name' => 'hasan',
        //         'email' => 'hasan@gmail.com',
        //         'phone' => '01956565756',
        //         'address' => 'badda,dhaka',
        //     ],
           
        // ]);

        for ($i=0;$i<8;$i++){
            Student::create([
                'name' => Str::random(10),
                 'email' => Str::random(10).'@gmail.com',
                 'phone' => Str::random(11),
                 'address' => Str::random(),
            ]);
        }
    }
}
