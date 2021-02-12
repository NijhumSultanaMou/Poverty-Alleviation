<?php

namespace App\Http\Controllers;

use App\payment;
use Illuminate\Http\Request;
use App\Farmer;

class FarmerController extends Controller
{
    public function index()
    {
    	return view('frontend/farmer');
    }

    public function store(Request $request)
    {
        $farmer= new Farmer();

        $farmer->firstname = $request->input('firstname');
        $farmer->lastname = $request->input('lastname');
        $farmer->fathername = $request->input('fathername');
        $farmer->mothername = $request->input('mothername');
        $farmer->mobile = $request->input('mobile');

        if ($request->file('image')) 
       {
       	 $file=$request->file('image');
       	 $extension=$file->getClientOriginalExtension();
       	 $filename=time().'.'. $extension;
       	 $file->move('uploads/farmer/',$filename);
       	 $farmer->image=$filename;
       }
       else
       {
           return $request;
           $farmer->image='';
       }


        $farmer->gender = $request->input('gender');
        $farmer->dofb = $request->input('dofb');
        $farmer->age = $request->input('age');
        $farmer->nid = $request->input('nid');
        $farmer->address = $request->input('address');
        $farmer->district = $request->input('district');
        $farmer->division = $request->input('division');
        $farmer->zipcode = $request->input('zipcode');
        $farmer->amount = $request->input('amount');
        $value =(double)$request->input('amount')+(double)$request->input('amount')*0.1;
        $farmer->totalamount = $value;
        $farmer->land = $request->input('land');
        $farmer->paper = $request->input('paper');

        $farmer->save();

        $pay = new payment();

        $pay ->Name= $request->input('firstname')." ".$request->input('lastname') ;
        $pay ->Mobile_Number =$request->input('mobile');
        $pay ->totalamount=(double)$value;
        $pay->paidamount = 0;
        $pay ->save();
   
       return view('frontend/farmer')->with('farmer', $farmer);
    }


///////////////////////////////////////////////////////////////////////////////////

    public function display()
    {
      $farmers= Farmer::all();
      return view('admin.farmer-view')->with('farmers', $farmers);
    }

    public function edit($id)
    {
        $farmers=Farmer::find($id);
        return view('admin.farmerupdateform')->with('farmers',$farmers);
    }

    public function update(Request $request,$id)
    {
       $farmers= Farmer::find($id);

        $farmers->lastname = $request->input('lastname');
        $farmers->fathername = $request->input('fathername');
        $farmers->mothername = $request->input('mothername');
        $farmers->mobile = $request->input('mobile');

        $farmers->save();
        
        return redirect("/farmerlist")->with('status','Farmer info Updated Successful');
    }

}
