<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'country'=>'required',
            'state'=>'required',
            'address'=>'required',
            'dob'=>'required',

        ]);
        echo "<pre>";
        print_r($request->all());

        $customer=new Customers;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
        // \DB::enableQueryLog();
        $customer->save();
        // dd(\DB::getQueryLog());

        return redirect('/customer/view');
    }

    public function view(){
        $customer=Customers::all();
        $data=compact('customer');
        return view('customer-view')->with($data);
    }
}
