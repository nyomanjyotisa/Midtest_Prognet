<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transaction_id',
        'amount',
        'proof_of_payment',
    ];
}
