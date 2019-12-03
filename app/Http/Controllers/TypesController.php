<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Type;

class TypesController extends Controller
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

    //Show types 
    public function index ()
    {
        $types=Type::orderBy('id' , 'ASC')->get();
        $count_types=Type::count();

    	return view ('types', compact('types', 'count_types'));
    }


    //New type
    public function new (Request $request)
    {
         $validator = Validator::make($request->all(), [
        'type' => 'required|max:255',
         ]);
         if ($validator->fails()) {
         return back()
            ->withInput()
            ->withErrors($validator);
        }


        $addnewtype = new Type;
        $addnewtype->type = $request->type;
        $addnewtype->save();

        return redirect ('types')->with('status', 'Your new type submited !');
    }


    //Delete type
    public function delete($id)
    {
        $delete_type = Type::find($id);

        $delete_type->delete();

        return redirect('types')->with('status', 'Your types deleted !');
    }

}
