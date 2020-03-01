<?php

namespace App\Models\Tours;

use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    protected $table="tour_packages";
    protected $primaryKey="Package_id";
    public $timestamps=false;

    public function features(){
        return $this->hasMany("App\Models\Tours\PackageFeature",
            "Package_id","Package_id")->where("Active_flag",1);
    }
}
