<?php

namespace App\Models\Tours;

use Illuminate\Database\Eloquent\Model;

class TourExclusive extends Model
{
    protected $primaryKey="Id";
    public $timestamps=false;

    public function options()
    {
        return $this->hasMany("App\Models\Tours\ExclusiveOption","Exclusive_id","Id")
            ->where(["Active_flag"=>1]);
    }
}
