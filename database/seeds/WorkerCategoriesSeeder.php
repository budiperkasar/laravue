<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class WorkerCategoriesSeeder extends Seeder
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
            DB::table('worker_categories')->insert([
                'group_id' => $faker->numberBetween(1, 5),
                'active' => $faker->numberBetween(0, 1),
                'parent' => $faker->numberBetween(1, 3),
                'entry_by' => $faker->numberBetween(1, 5),
                'title' => $faker->sentence(2),
                'slug' => $faker->slug(4),
                'content' => $faker->text(100),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
