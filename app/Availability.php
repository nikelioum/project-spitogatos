<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Availability extends Model
{
	use Searchable;

    public function appartment()
    {
        return $this->hasMany('App\Appartment');

    }


    public function toSearchableArray()
    {
        $array = $this->toArray();


        return $array;
    }


}
