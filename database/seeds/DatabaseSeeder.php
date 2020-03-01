<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    use \Illuminate\Foundation\Testing\DatabaseMigrations;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        factory(GroupTours::class)->create([
//            "Tour_name"=>"Dubai to Georgia",
//            "Tour_slug"=>\Illuminate\Support\Str::slug("Dubai to Georgia")
//        ])->each(function ($tour){
//           DB::table("tour_images")->insert([
//                "Image_url"=>"images/georgia/georg1.jpg",
//               "Tour_id"=>$tour->Id
//           ]);
//            DB::table("tour_images")->insert([
//                "Image_url"=>"images/georgia/georg2.jpg",
//                "Tour_id"=>$tour->Id
//            ]);
//            DB::table("tour_images")->insert([
//                "Image_url"=>"images/georgia/georg3.jpg",
//                "Tour_id"=>$tour->Id
//            ]);
//            factory(\App\Models\Tours\TourPackage::class,3)->create([
//                "Tour_id"=>$tour->Id
//            ])->each(function($package){
//
//                factory(\App\Models\Tours\TourExclusive::class)->create([
//                    "Name"=>"Hotel rooms",
//                    "Package_id"=>$package->Package_id
//                ])->each(function($exclusive){
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"1 Person - Sharing room",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"1 Person - Private room",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"2 Person - One room",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"3 Person - One room",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"4 Person - One room",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                });
//
//                factory(\App\Models\Tours\TourExclusive::class)->create([
//                    "Name"=>"ADD-ON AED 100 PER TRAVELLER FOR TRAVEL INSURANCE",
//                    "Package_id"=>$package->Package_id
//                ])->each(function($exclusive){
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"1 Person",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"2 Person",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"3 Person",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"4 Person",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"5 Person",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                });
//
//                factory(\App\Models\Tours\TourExclusive::class)->create([
//                    "Name"=>"ADD-ON AED 400 PER SEAT IN LUXURY COACH FOR ALL 4 DAYS",
//                    "Package_id"=>$package->Package_id
//                ])->each(function($exclusive){
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"1 Seat",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"2 Seats",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"3 Seats",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"4 Seats",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
//                        "Exclusive_option"=>"5 Seats",
//                        "Exclusive_id"=>$exclusive->Id
//                    ]);
//                });
//
//                factory(\App\Models\Tours\PackageFeature::class)->create([
//                    "Package_id"=>$package->Package_id,
//                    "Feature_name"=>"Flight 20 kg",
//                    "Package_icon"=>"fa-plane"
//                ]);
//                factory(\App\Models\Tours\PackageFeature::class)->create([
//                    "Package_id"=>$package->Package_id,
//                    "Feature_name"=>"Tour Guide",
//                    "Package_icon"=>"fa-user"
//                ]);
//                 factory(\App\Models\Tours\PackageFeature::class)->create([
//                     "Package_id"=>$package->Package_id,
//                     "Feature_name"=>"Transportation",
//                     "Package_icon"=>"fa-vehicle"
//                 ]);
//                factory(\App\Models\Tours\PackageFeature::class)->create([
//                   "Package_id"=>$package->Package_id,
//                    "Feature_name"=>"Hotel",
//                    "Package_icon"=>"fa-home"
//                ]);
//
//            });
//        });

        $tour = factory(\App\Models\Tours\GroupTours::class)->create([
            "Tour_name"=>"Dubai to London",
            "Tour_slug"=>\Illuminate\Support\Str::slug("Dubai to London")
        ]);
            DB::table("tour_images")->insert([
                "Image_url"=>"images/georgia/georg1.jpg",
                "Tour_id"=>$tour->Id
            ]);
            DB::table("tour_images")->insert([
                "Image_url"=>"images/georgia/georg2.jpg",
                "Tour_id"=>$tour->Id
            ]);
            DB::table("tour_images")->insert([
                "Image_url"=>"images/georgia/georg3.jpg",
                "Tour_id"=>$tour->Id
            ]);

            $package = factory(\App\Models\Tours\TourPackage::class)->create([
                "Tour_id"=>$tour->Id,
                "Package_name"=>"3 days (March 27th - March 30th)"
            ]);

            $exclusive = factory(\App\Models\Tours\TourExclusive::class)->create([
                    "Name"=>"Hotel rooms",
                    "Package_id"=>$package->Package_id]);

            factory(\App\Models\Tours\ExclusiveOption::class)->create([
                "Exclusive_option"=>"1 Person - Sharing room",
                "Exclusive_id"=>$exclusive->Id
            ]);
            factory(\App\Models\Tours\ExclusiveOption::class)->create([
                "Exclusive_option"=>"1 Person - Private room",
                "Exclusive_id"=>$exclusive->Id
            ]);
            factory(\App\Models\Tours\ExclusiveOption::class)->create([
                "Exclusive_option"=>"2 Person - One room",
                "Exclusive_id"=>$exclusive->Id
            ]);
            factory(\App\Models\Tours\ExclusiveOption::class)->create([
                "Exclusive_option"=>"3 Person - One room",
                "Exclusive_id"=>$exclusive->Id
            ]);
            factory(\App\Models\Tours\ExclusiveOption::class)->create([
                "Exclusive_option"=>"4 Person - One room",
                "Exclusive_id"=>$exclusive->Id
            ]);


        $exclusive = factory(\App\Models\Tours\TourExclusive::class)->create([
                    "Name"=>"ADD-ON AED 100 PER TRAVELLER FOR TRAVEL INSURANCE",
                    "Package_id"=>$package->Package_id
                ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"1 Person",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"2 Person",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"3 Person",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"4 Person",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"5 Person",
                        "Exclusive_id"=>$exclusive->Id
                    ]);

        $exclusive = factory(\App\Models\Tours\TourExclusive::class)->create([
                    "Name"=>"ADD-ON AED 400 PER SEAT IN LUXURY COACH FOR ALL 4 DAYS",
                    "Package_id"=>$package->Package_id
                ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"1 Seat",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"2 Seats",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"3 Seats",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=> "4 Seats",
                        "Exclusive_id"=>$exclusive->Id
                    ]);
                    factory(\App\Models\Tours\ExclusiveOption::class)->create([
                        "Exclusive_option"=>"5 Seats",
                        "Exclusive_id"=>$exclusive->Id
                    ]);


                factory(\App\Models\Tours\PackageFeature::class)->create([
                    "Package_id"=>$package->Package_id,
                    "Feature_name"=>"Flight 20 kg",
                    "Package_icon"=>"fa-plane"
                ]);
                factory(\App\Models\Tours\PackageFeature::class)->create([
                    "Package_id"=>$package->Package_id,
                    "Feature_name"=>"Tour Guide",
                    "Package_icon"=>"fa-user"
                ]);
                factory(\App\Models\Tours\PackageFeature::class)->create([
                    "Package_id"=>$package->Package_id,
                    "Feature_name"=>"Transportation",
                    "Package_icon"=>"fa-vehicle"
                ]);
                factory(\App\Models\Tours\PackageFeature::class)->create([
                    "Package_id"=>$package->Package_id,
                    "Feature_name"=>"Hotel",
                    "Package_icon"=>"fa-home"
                ]);
    }
}
