<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handicraft;

class HandicraftController extends Controller
{
    public function index()
    {
    	return view('frontend/handicraft');
    }

    public function store(Request $request)
    {
        $handicraft= new Handicraft();

        $handicraft->firstname = $request->input('firstname');
        $handicraft->lastname = $request->input('lastname');
        $handicraft->fathername = $request->input('fathername');
        $handicraft->mothername = $request->input('mothername');
        $handicraft->mobile = $request->input('mobile');

        if ($request->file('image')) 
       {
       	 $file=$request->file('image');
       	 $extension=$file->getClientOriginalExtension();
       	 $filename=time().'.'. $extension;
       	 $file->move('uploads/handicraft/',$filename);
       	 $handicraft->image=$filename;
       }
       else
       {
           return $request;
           $handicraft->image='';
       }


        $handicraft->gender = $request->input('gender');
        $handicraft->dofb = $request->input('dofb');
        $handicraft->age = $request->input('age');
        $handicraft->nid = $request->input('nid');
        $handicraft->address = $request->input('address');
        $handicraft->district = $request->input('district');
        $handicraft->division = $request->input('division');
        $handicraft->zipcode = $request->input('zipcode');
        $handicraft->amount = $request->input('amount');
        $handicraft->land = $request->input('land');
        $handicraft->paper = $request->input('paper');

        $handicraft->save();

      
       
       return view('frontend/handicraft')->with('handicraft', $handicraft);

  
    }


     public function display()
    {
      $handicrafts= Handicraft::all();
      return view('admin.handicraft-view')->with('handicrafts', $handicrafts);
    }


}
