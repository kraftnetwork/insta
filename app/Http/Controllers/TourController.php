<?php

namespace App\Http\Controllers;

use App\Models\Tours\GroupTours;
use App\Models\Tours\PackageFeature;
use App\Models\Tours\TourExclusive;
use App\Models\Tours\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    public function packages(Request $request,$tour_slug)
    {
        $tour = GroupTours::with("packages.features")->where(["Tour_slug"=>$tour_slug,"Active_flag"=>1])
            ->select("Tour_name","Id","Tour_slug")->first();

        return view("dubai-georgia",compact("tour"));
    }

    public function bookTour(Request $request,$tour_slug,$id)
    {
        $tour = GroupTours::with("tourImages")
            ->where(["Active_flag"=>1,"Tour_slug"=>$tour_slug])->first();

        $package = TourPackage::with(["features"])->where(["Active_flag"=>1,
            "Tour_id"=>$tour->Id,"Package_id"=>$id])->first();

        $exclusives = TourExclusive::with(["options"])->where([
            "Active_flag"=>1,
            "Package_id"=>$package->Package_id
        ])->get();


        return view("book_tour",compact("tour","package","exclusives"));
    }
}
