<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'room_id',
        'customer_id',
        'duration_month',
        'start_date',
        'end_date',
        'total_fee',
        'payment_status',
    ];
    
    public function customers(){
        return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }

    public function rooms(){
        return $this->belongsTo('App\Room', 'room_id', 'id');
    }
}