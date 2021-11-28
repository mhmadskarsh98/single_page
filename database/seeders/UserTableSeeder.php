<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name'=>'mohmammed',
            'email'=>'mhmadskarsh@gmail.com',
            'password'=> bcrypt('123456789')
        ]);
        User::create([
            'name' => 'ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        User::create([
            'name' => 'ibrahim',
            'email' => 'ibrahim@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
