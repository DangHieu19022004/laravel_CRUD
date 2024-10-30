<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $flowerIds = DB::table('flowers')->pluck('id')->toArray();

        for($i = 0; $i < 50; $i++) {
            DB::table('regions')->insert([
                'flower_id' => $faker->randomElement($flowerIds), // Chọn ngẫu nhiên một flower_id từ danh sách
                'region_name' => $faker->city
            ]);
        }
    }
}
