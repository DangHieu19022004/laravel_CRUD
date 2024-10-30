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

        $bookIDs = DB::table('types')->pluck('id')->toArray();

        for($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'type_id' => $faker->randomElement($bookIDs), // Chọn ngẫu nhiên một BookID từ danh sách
                'name' => $faker->name,
                'birthday' => $faker->date,
                'gender' => $faker->numberBetween(1, 2) == 1 ?  'Nam' : 'Nữ',
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber(),
                'email' => $faker->email
            ]);
        }
    }
}
