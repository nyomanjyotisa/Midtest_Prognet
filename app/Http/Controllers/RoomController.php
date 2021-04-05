<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return view('rooms', ['rooms' => $rooms]);
    }

    public function delete ($id){
        Room::where('id', $id)->delete();
        return redirect ('/rooms');
    }
}
