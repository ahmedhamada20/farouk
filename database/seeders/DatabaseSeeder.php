<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(AdminLoginSeeder::class);
        $this->call(SiteSettingSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PreviousWorkSeeder::class);
        $this->call(CustomerReviewsSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(NumberSeeder::class);
        $this->call(BestSellerSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(AdsSeeder::class);
        $this->call(PackagesSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
       
    }
}
