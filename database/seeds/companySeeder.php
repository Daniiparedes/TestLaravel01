<?php

use Illuminate\Database\Seeder;
use DB;
Use faker\Factory as faker;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $company = [];

        foreach (range(1, 20) as $index) {
            $company [] = [
                'Phoneid'=> "company $index",
                'name'=> "company $index",
                'created_at' =>now(),
                'updated_at' =>now(),
            ];
        }
        DB::table('company')->insert($company);
    }

}

