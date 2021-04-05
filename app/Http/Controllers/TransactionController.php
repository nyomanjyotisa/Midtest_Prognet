<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view('transaction', ['transactions' => $transactions]);
    }

    public function delete ($id){
        Transaction::where('id', $id)->delete();
        return redirect ('/transaction');
    }
}
