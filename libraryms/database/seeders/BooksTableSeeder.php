<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'Title' => $faker->word,
                'Author' => $faker->name,
                'ISBN' => $faker->isbn13,
                'PublishedYear' => $faker->year,
                'Genre' => $faker->word
            ]);
        }

    }
}
