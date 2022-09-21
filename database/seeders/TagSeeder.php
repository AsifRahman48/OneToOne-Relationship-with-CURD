<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    public function run()
    {
        $faker=Faker::create();

        for ($i=1;$i<=10;$i++)
        {
            $tag=new Tag;
            $tag->name=$faker->name;
            $tag->save();
        }
    }
}
