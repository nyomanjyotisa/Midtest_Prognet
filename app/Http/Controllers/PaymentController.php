<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::all();
        return view('payment', ['payments' => $payments]);
    }

    public function delete ($id){
        Payment::where('id', $id)->delete();
        return redirect ('/payment');
    }
}
