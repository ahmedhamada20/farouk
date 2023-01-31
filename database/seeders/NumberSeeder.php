<?php

namespace Database\Seeders;

use App\Models\Number;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NumberSeeder extends Seeder
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
        DB::table('numbers')->truncate();

        for ($i = 1; $i <= 5 ; $i++) {
            $new = new Number();
            $new->name = ['ar' => $faker->name, 'en' => $faker->name];
            $new->notes = ['ar' => $faker->name, 'en' => $faker->name];
            $new->status = false;

            $new->save();
        }

        Photo::whereIn('photoable_type',['App\Models\Number'])->delete();


        for ($i = 1; $i <= 5 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\Number'
            ]);
        }


        Schema::enableForeignKeyConstraints();
    }
}
