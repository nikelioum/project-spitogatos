<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Location;

use App\Type;

use App\Availability;

use App\Appartment;

use Validator;

class PagesController extends Controller
{
    //index page
    public function index ()
    {

      $locations=Location::orderBy('id' , 'ASC')->get();

      $types=Type::orderBy('id' , 'ASC')->get();

      $availabilities=Availability::orderBy('id' , 'ASC')->get();

    	return view ('welcome', compact('locations', 'types', 'availabilities'));
    }


    //search
    public function search (Request $request){

      $validator = Validator::make($request->all(), [

      'metresmin' => 'required|numeric|min:20',
      'metresmax' => 'required|numeric|max:20000',
      'pricemin' => 'required|numeric|min:10',
      'pricemax' => 'required|numeric|max:10000000',
       ]);
       if ($validator->fails()) {
       return back()
          ->withInput()
          ->withErrors($validator);
      }

      else
      {

    if($request->isMethod('post')){

    $type =              $request->type;
    $location =          $request->location;
    $availability =      $request->availability;
    $pricemin =          $request->pricemin;
    $pricemax =          $request->pricemax;
    $metresmin =         $request->metresmin;
    $metresmax =         $request->metresmax;



    $houses=Appartment::with('type', 'location', 'availability')
    ->where('type_id' , 'like', $type)
    ->where('location_id' , 'like', $location)
    ->where('availability_id' , 'like', $availability)
    ->where('price' , '>=', $pricemin)
    ->where('price' , '<=', $pricemax)
    ->where('meters' , '>=', $metresmin)
    ->where('meters' , '<=', $metresmax)
    ->get();

        return view ('search-result', compact('houses'));


    }

  }
}
}
