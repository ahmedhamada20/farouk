<?php

namespace Database\Seeders;

use App\Models\RouteActive;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RouteActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   $faker = Factory::create();
        Schema::disableForeignKeyConstraints();
        DB::table('route_actives')->truncate();
        RouteActive::create(['route_name' => 'aboutUs', 'status' => true]);
        // ], [
        //     'route_name' => 'course',
        //     'status' => true,
        // ], [
        //     'route_name' => 'previousWork',
        //     'status' => true,
        // ], [
        //     'route_name' => 'customerReviews',
        //     'status' => true,
        // ], [
        //     'route_name' => 'blog',
        //     'status' => true,
        // ],[
        //     'route_name' => 'number',
        //     'status' => true,
        // ],[
        //     'route_name' => 'bestSeller',
        //     'status' => true,
        // ],[
        //     'route_name' => 'event',
        //     'status' => true, 
        // ],[
        //     'route_name' => 'news',
        //     'status' => true, 
        // ],[
        //     'route_name' => 'ads',
        //     'status' => true, 
        // ],[
        //     'route_name' => 'packages',
        //     'status' => true, 
        // ],[
        //     'route_name' => 'question',
        //     'status' => true, 
        // ],[
        //     'route_name' => 'category',
        //     'status' => true, 
        // ]);
        Schema::enableForeignKeyConstraints();
    }
}
