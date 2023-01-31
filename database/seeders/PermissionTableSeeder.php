<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('permissions')->truncate();
        DB::table('role_has_permissions')->truncate();
        $permissions = [
            // Users &&  Roles
            'show-user',
            'create-user',
            'edit-user',
            'deleted-user',
            'show-role',
            'create-role',
            'edit-role',
            'deleted-role',
            'permissions-List',

            // dashboard
            'dashboard',
            'setting',

            //aboutUs
            'show-aboutUs',
            'create-aboutUs',
            'edit-aboutUs',
            'deleted-aboutUs',
            'list-aboutUs',

            //Product
            'show-Product',
            'create-Product',
            'edit-Product',
            'deleted-Product',
            'list-Product',

            //previousWork
            'show-previousWork',
            'create-previousWork',
            'edit-previousWork',
            'deleted-previousWork',
            'list-previousWork',

            //gallery
            'show-gallery',
            'create-gallery',
            'edit-gallery',
            'deleted-gallery',
            'list-gallery',

            //blog
            'show-blog',
            'create-blog',
            'edit-blog',
            'deleted-blog',
            'list-blog',

            //number
            'show-number',
            'create-number',
            'edit-number',
            'deleted-number',
            'list-number',

            //bestSeller
            'show-bestSeller',
            'create-bestSeller',
            'edit-bestSeller',
            'deleted-bestSeller',
            'list-bestSeller',

            //event
            'show-event',
            'create-event',
            'edit-event',
            'deleted-event',
            'list-event',

            //slider
            'show-slider',
            'create-slider',
            'edit-slider',
            'deleted-slider',
            'list-slider',

            //news
            'show-news',
            'create-news',
            'edit-news',
            'deleted-news',
            'list-news',

            //ads
            'show-ads',
            'create-ads',
            'edit-ads',
            'deleted-ads',
            'list-ads',

            //packages
            'show-packages',
            'create-packages',
            'edit-packages',
            'deleted-packages',
            'list-packages',

            //question
            'show-question',
            'create-question',
            'edit-question',
            'deleted-question',
            'list-question',

            //course
            'show-course',
            'create-course',
            'edit-course',
            'deleted-course',
            'list-course',

            // category
            'show-category',
            'create-category',
            'edit-category',
            'deleted-category',
            'list-category',


            // exam
            'show-exam',
            'create-exam',
            'edit-exam',
            'deleted-exam',
            'list-exam',


        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        Schema::enableForeignKeyConstraints();

    }
}
