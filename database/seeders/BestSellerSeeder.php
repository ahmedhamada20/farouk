<?php

namespace Database\Seeders;

use App\Models\BestSeller;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BestSellerSeeder extends Seeder
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
        DB::table('best_sellers')->truncate();

        for ($i = 1; $i <= 5 ; $i++) {
            $new = new BestSeller();
            $new->name = ['ar' => $faker->name, 'en' => $faker->name];
            $new->notes = ['ar' => $faker->name, 'en' => $faker->name];
            $new->status = false;
            $new->price = $faker->numberBetween(1000,2000);

            $new->save();
        }

        Photo::whereIn('photoable_type',['App\Models\BestSeller'])->delete();


        for ($i = 1; $i <= 5 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\BestSeller'
            ]);
        }


        Schema::enableForeignKeyConstraints();
    }
}
