<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Availability;

class AvailabilitiesController extends Controller
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

    //Show availabilities 
    public function index ()
    {

        $availabilities=Availability::orderBy('id' , 'ASC')->get();
        $count_availabilities=Availability::count();

    	return view ('availabilities', compact('availabilities', 'count_availabilities'));
    }


    //New availability
    public function new (Request $request)
    {
         $validator = Validator::make($request->all(), [
        'availability' => 'required|max:255',
         ]);
         if ($validator->fails()) {
         return back()
            ->withInput()
            ->withErrors($validator);
        }


        $addnewavailability = new Availability;
        $addnewavailability->availability = $request->availability;
        $addnewavailability->save();

        return redirect ('availabilities')->with('status', 'Your new availability submited !');
    }


    //Delete availability
    public function delete($id)
    {
        $delete_availability = Availability::find($id);

        $delete_availability->delete();

        return redirect('availabilities')->with('status', 'Your availability deleted !');
    }

}
