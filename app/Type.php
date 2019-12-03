<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Type extends Model
{

	use Searchable;

    public function appartments()
    {
        return $this->hasMany('App\Appartment');

    }


    public function toSearchableArray()
    {
        $array = $this->toArray();


        return $array;
    }


}
