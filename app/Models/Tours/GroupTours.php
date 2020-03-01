<?php

namespace App\Models\Tours;

use Illuminate\Database\Eloquent\Model;

class GroupTours extends Model
{

    protected $primaryKey="Id";
    public $timestamps = false;

    public function packages()
    {
        return $this->hasMany("App\Models\Tours\TourPackage","Tour_id","Id")
            ->where("Active_flag",1);
    }

    public function tourImages()
    {
        return $this->hasMany("App\Models\Tours\TourImage","Tour_id","Id")
            ->where("Active_flag",1);
    }
}
