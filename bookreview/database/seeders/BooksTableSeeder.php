<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Constants\Table;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //show main
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++) {
            DB::table(Table::table_name2)->insert([
                Table::tb2_2 => $faker->name,
                Table::tb2_3 => $faker->name,
                Table::tb2_4 => $faker->word,
                Table::tb2_5 => $faker->year,
                Table::tb2_6 => $faker->isbn13,
                Table::tb2_7 => $faker->url
            ]);
        }

    }
}
