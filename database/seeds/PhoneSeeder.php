<?php

use Illuminate\Database\Seeder;
use DB;
Use faker\Factory as faker;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Phone = [];

        foreach (range(1, 20) as $index) {
            $Phone [] = [
                'Model'=> "Phone $index",
                'Price'=> $faker->randomDigitNot(0) * 100,
                'created_at' =>now(),
                'updated_at' =>now(),
            ];
        }
        DB::table('Phone')->insert($Phone);
    }
}
