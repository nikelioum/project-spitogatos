<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Appartment;

use App\Location;

use App\Type;

use App\Availability;

class AppartmentsController extends Controller
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

    //Show appartments 
    public function index ()
    {
        $count_appartments=Appartment::count();
        $types=Type::orderBy('id', 'ASC')->get();
        $locations=Location::orderBy('id', 'ASC')->get();
        $availabilities=Availability::orderBy('id', 'ASC')->get();
        $appartments=Appartment::with('availability', 'location', 'type')->orderBy('id', 'ASC')->paginate(5);

    	return view ('appartments', compact('appartments', 'count_appartments', 'types', 'locations', 'availabilities'));
    }


    //New appartment
    public function new (Request $request)
    {
        $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'location' => 'required|max:255',
        'availability' => 'required|max:255',
        'type' => 'required|max:255',
        'price' => 'required|numeric|gte:10|lte:10000000',
        'meters' => 'required|numeric|gte:20|lte:20000',
        'image' => 'image',
         ]);
         if ($validator->fails()) {
         return back()
            ->withInput()
            ->withErrors($validator);
        }


         if ($request->file('image') == null) 
        {

        $file = "";

        }

        else
        {

        $filename = $request->image->getClientOriginalName();

        $request->file('image')->storeAs('images',$filename);


        $addnewappartment = new Appartment;
        $addnewappartment->title = $request->title;
        $addnewappartment->description = $request->description;
        $addnewappartment->location_id = $request->location;
        $addnewappartment->price = $request->price;
        $addnewappartment->availability_id = $request->availability;
        $addnewappartment->type_id = $request->type;
        $addnewappartment->meters = $request->meters;
        $addnewappartment->image = $filename;
        $addnewappartment->save();

        return redirect ('appartments')->with('status', 'Your new appartment submited !');
    }

    }


     //delete appartment
    public function delete ($id)
    {
        $appartment= Appartment::find($id);
        $image_path = public_path().'/uploads/images/'.$appartment->image;
         unlink($image_path);
        $appartment->delete();

        return redirect ('appartments')->with('status', 'Your appartment deleted !');
    }

    

}
