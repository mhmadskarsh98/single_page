<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        for($i =1 ; $i<=15 ; $i++){
            Post::create([
                'user_id'=>User::inRandomOrder()->first()->id,
                'tittle'=> $faker->sentence(4),
                'body'=>$faker->paragraph(),

            ]);
        }
    }
}
