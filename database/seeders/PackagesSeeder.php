<?php

namespace Database\Seeders;

use App\Models\Packages;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PackagesSeeder extends Seeder
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
        DB::table('packages')->truncate();
        DB::table('features_packages')->truncate();

        for ($i = 1; $i <= 5 ; $i++) {
            $new = new Packages();
            $new->name = ['ar' => $faker->name, 'en' => $faker->name];
            $new->notes = ['ar' => $faker->name, 'en' => $faker->name];
            $new->status = $faker->randomElement([true,false]);
            $new->price = $faker->randomElement(['250','320','550','1200']);
            $new->save();


            $new->featuresPackages()->create([
                "name" => ['ar' => $faker->name, 'en' => $faker->name],
            ]);
        }



        Photo::whereIn('photoable_type',['App\Models\Packages'])->delete();


        for ($i = 1; $i <= 5 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\Packages'
            ]);
        }


        Schema::enableForeignKeyConstraints();
    }
}
