<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Appartment;

use App\Location;

use App\Type;

use App\Availability;

class ApiController extends Controller
{
    //Api
    public function api()
    {
        $appartments = Appartment::with('availability', 'location', 'type')->get();
        return response()->json($appartments);
    }
}
