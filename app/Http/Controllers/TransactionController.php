<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Room;
use App\Customer;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        $rooms = Room::all();
        $customers = Customer::all();
        return view('transaction', ['transactions' => $transactions, 'rooms' => $rooms, 'customers' => $customers]);
    }

    public function new(Request $request){
        $transaction = new Transaction;

        $room = Room::with('room_types')->find($request->room);

        $transaction->room_id = $request->room;
        $transaction->customer_id = $request->customer;
        $transaction->duration_month = $request->duration;
        $transaction->start_date = $request->tanggalmulai;
        $transaction->total_fee = $request->duration*$room->room_types->monthly_fee;
        $transaction->payment_status = 'not_paid';
        $transaction->save();

        return redirect ('/transaction');
    }

    public function delete ($id){
        Transaction::where('id', $id)->delete();
        return redirect ('/transaction');
    }

    public function edit($id){
        $transaction = Transaction::find($id);
        $rooms = Room::all();
        $customers = Customer::all();

        return view('transactionEdit',['transaction' =>$transaction, 'rooms' => $rooms, 'customers' => $customers]);
    }

    public function update(Request $request, $id){
        $transaction = Transaction::find($id);

        $room = Room::with('room_types')->find($request->room);

        $transaction->room_id = $request->room;
        $transaction->customer_id = $request->customer;
        $transaction->duration_month = $request->duration;
        $transaction->start_date = $request->tanggalmulai;
        $transaction->total_fee = $request->duration*$room->room_types->monthly_fee;
        $transaction->save();

        return redirect ('/transaction');
    }
}
