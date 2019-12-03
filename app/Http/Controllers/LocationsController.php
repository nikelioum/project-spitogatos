<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Location;

class LocationsController extends Controller
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

    //Show locations 
    public function index ()
    {
        $count_locations=Location::count();
        $locations=Location::orderBy('id' , 'ASC')->get();

    	return view ('locations', compact('locations', 'count_locations'));
    }


    //New location
    public function new (Request $request)
    {
         $validator = Validator::make($request->all(), [
        'location' => 'required|max:255',
         ]);
         if ($validator->fails()) {
         return back()
            ->withInput()
            ->withErrors($validator);
        }


        $addnewlocation = new Location;
        $addnewlocation->location = $request->location;
        $addnewlocation->save();

        return redirect ('locations')->with('status', 'Your new location submited !');
    }


    //Delete location
    public function delete($id)
    {
        $delete_location = Location::find($id);

        $delete_location->delete();

        return redirect('locations')->with('status', 'Your location deleted !');
    }


}
