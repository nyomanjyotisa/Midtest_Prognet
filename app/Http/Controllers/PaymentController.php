<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Transaction;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::all();
        $transactions = Transaction::all();
        return view('payment', ['payments' => $payments, 'transactions' => $transactions]);
    }

    public function new(Request $request){
        $payment = new Payment;

        $payment->transaction_id = $request->transaction;

        $file = $request->file('file');
        $path = 'proof_of_payment';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($path,$nama_file);

        $payment->proof_of_payment = $nama_file;
        $payment->amount = $request->jumlah;
        $payment->save();

        return redirect ('/payment');
    }

    public function delete ($id){
        Payment::where('id', $id)->delete();
        return redirect ('/payment');
    }

    public function edit($id){
        $payment = Payment::find($id);

        $transactions = Transaction::all();
        return view('paymentEdit',['payment' =>$payment, 'transactions' => $transactions]);
    }

    public function update(Request $request, $id){
        $payment = Payment::find($id);

        $payment->transaction_id = $request->transaction;

        if(is_null($request->file)){
        }else{
            $file = $request->file('file');
            $path = 'proof_of_payment';
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move($path,$nama_file);
            $payment->proof_of_payment = $nama_file;
        }
        
        $payment->amount = $request->jumlah;
        $payment->save();

        return redirect ('/payment');
    }
}
