<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Constants\Table;


class BorrowingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     //not show - side
    public function run(): void
    {
        $faker = Faker::create();

        $bookIDs = DB::table('books')->pluck('BookID')->toArray();
        $userIDs = DB::table('users')->pluck('id')->toArray();

        for($i = 0; $i < 50; $i++) {
            DB::table(Table::table_name1)->insert([
                Table::tb1_2 => $faker->randomElement($bookIDs), // Chọn ngẫu nhiên một BookID từ danh sách
                Table::tb1_3 => $faker->randomElement($userIDs), // Chọn ngẫu nhiên một UserID từ danh sách
                Table::tb1_4 => $faker->numberBetween(1, 5),
                Table::tb1_5 => $faker->text,
                Table::tb1_6 => $faker->date
            ]);
        }
    }
}
