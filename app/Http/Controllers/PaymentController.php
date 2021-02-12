<?php

namespace App\Http\Controllers;

use App\Farmer;
use App\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public  function index ($id){
        $count=1;
        $value= Farmer::find($id);
        return view('admin.loanview',compact('value','count'));

    }
    public function submitpayment($id,Request $request){
        $count=1;
        $value= Farmer::find($id);

        $value1=payment::find($id);
        $paid= (double)$value1->totalamount/6;
        $previous=  (double)$value1->paidamount;
        $value1->paidamount = $previous+$paid;
        $value1->update();
        
       return redirect("/loan/$value->id")->with('status','payment successful');

    }
}
