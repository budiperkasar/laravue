<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($x=1; $x<=10; $x++)
        {
            DB::table('business_type')->insert([
                'worker_group_id' => $faker->numberBetween(1, 3),
                'title' => $faker->sentence(2),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
