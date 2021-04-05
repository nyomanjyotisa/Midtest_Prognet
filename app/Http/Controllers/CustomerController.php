<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Redirect;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers', ['customers' => $customers]);
    }

    public function new(Request $request){
        $customer = new Customer;

        $customer->name = $request->name;
        $customer->address = $request->alamat;
        $customer->phone = $request->phone;
        $customer->gender = $request->gender;
        $customer->save();

        return redirect ('/customers');
    }

    public function delete ($id){
        Customer::where('id', $id)->delete();
        return redirect ('/customers');
    }

    public function edit($id){
        $customer = Customer::find($id);

        return view('customerEdit',['customer' =>$customer]);
    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->address = $request->alamat;
        $customer->phone = $request->phone;
        $customer->gender = $request->gender;
        $customer->save();

        return redirect ('/customers');
    }
}
