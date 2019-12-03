<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Appartment extends Model
{

    use Searchable;

    public function availability()
    {
        return $this->belongsTo('App\Availability');
        
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
        
    }

    public function type()
    {
        return $this->belongsTo('App\Type');

    }


    public function toSearchableArray()
    {
        $array = $this->toArray();


        return $array;
    }


}
