<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomType;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::all();
        $roomtype = RoomType::all();
        return view('rooms', ['rooms' => $rooms, 'roomtype' => $roomtype]);
    }

    public function new(Request $request){
        $room = new Room;

        $room->name = $request->name;

        $file = $request->file('file');
        $path = 'rooms_pic';
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($path,$nama_file);

        $room->picture = $nama_file;
        $room->room_type_id = $request->tipekamar;
        $room->save();

        return redirect ('/rooms');
    }

    public function delete ($id){
        Room::where('id', $id)->delete();
        return redirect ('/rooms');
    }

    public function edit($id){
        $room = Room::find($id);
        $roomtype = RoomType::all();
        return view('roomsEdit',['room' =>$room, 'roomtype' => $roomtype]);
    }

    public function update(Request $request, $id){
        $room = Room::find($id);

        $room->name = $request->name;

        if(is_null($request->file)){
        }else{
            $file = $request->file('file');
            $path = 'rooms_pic';
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move($path,$nama_file);
            $room->picture = $nama_file;
        }

        $room->room_type_id = $request->tipekamar;
        $room->save();

        return redirect ('/rooms');
    }
}
