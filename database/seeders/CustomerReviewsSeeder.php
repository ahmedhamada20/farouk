<?php

namespace Database\Seeders;

use App\Models\CustomerReviews;
use App\Models\Photo;
use App\Models\PreviousWork;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CustomerReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Schema::disableForeignKeyConstraints();
        DB::table('customer_reviews')->truncate();

        for ($i = 1; $i <= 5 ; $i++) {
            $new = new CustomerReviews();
            $new->previous_works_id = PreviousWork::all()->random()->id;
            $new->name =$faker->name;
            $new->company_name = $faker->name;
            $new->learn = $faker->name;
            $new->save();
        }

        for ($i = 1; $i <= 2 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\CustomerReviews'
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
