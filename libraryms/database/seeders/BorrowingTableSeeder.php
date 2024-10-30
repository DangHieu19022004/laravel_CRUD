<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BorrowingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $bookIDs = DB::table('books')->pluck('BookID')->toArray();

        for($i = 0; $i < 50; $i++) {
            DB::table('borrowings')->insert([
                'BookID' => $faker->randomElement($bookIDs), // Chọn ngẫu nhiên một BookID từ danh sách
                'MemberID' => $faker->numberBetween,
                'BorrowDate' => $faker->date,
                'DueDate' => $faker->date,
                'ReturnedDate' => $faker->date
            ]);
        }
    }
}
