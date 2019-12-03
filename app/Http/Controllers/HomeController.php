<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Location;

use App\Type;

use App\Availability;

use App\Appartment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_locations=Location::count();
        $count_types=Type::count();
        $count_availabilities=Availability::count();
        $count_appartments=Appartment::count();
        return view('home', compact('count_locations', 'count_types', 'count_availabilities' , 'count_appartments'));
    }
}
