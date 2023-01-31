<?php

namespace Database\Seeders;

use App\Models\SettingSite;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SiteSettingSeeder extends Seeder
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
        DB::table('setting_sites')->truncate();
        SettingSite::create([
            'name' => ['ar' => $faker->name, 'en' => $faker->name],
            'status' => 1,
            'phone' => $faker->numberBetween(100000, 200000),
            'email' => $faker->safeEmail,
            'notes' => ['ar' => $faker->paragraph, 'en' => $faker->paragraph],
            'address' => $faker->name,
            'facebook' => $faker->url(),
            'twitter' => $faker->url(),
            'instagram' => $faker->url(),
            'YouTube' => $faker->url(),
            'Fax' => $faker->url(),
            'url' => $faker->url(),
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
