<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\News;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NewsSeeder extends Seeder
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
        DB::table('news')->truncate();

        for ($i = 1; $i <= 5 ; $i++) {
            $new = new News();
            $new->name = ['ar' => $faker->name, 'en' => $faker->name];
            $new->notes = ['ar' => $faker->name, 'en' => $faker->name];
            $new->status = $faker->randomElement([true,false]);
            $new->save();
        }

        Photo::whereIn('photoable_type',['App\Models\News'])->delete();


        for ($i = 1; $i <= 5 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\News'
            ]);
        }


        Schema::enableForeignKeyConstraints();
    }
}
