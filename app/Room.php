<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_type_id',
        'picture',
    ];

    public function room_types(){
        return $this->belongsTo('App\RoomType', 'room_type_id', 'id');
    }
}
