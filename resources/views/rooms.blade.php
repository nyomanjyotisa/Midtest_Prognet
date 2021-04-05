@extends('layouts.app')

    @section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Rooms Kos</h4>
                    <p class="card-description">
                    Ini adalah daftar Rooms di kosan.
                    </p>
                </div>
                <div class="text-center col">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" class="trigger-btn btn btn-success float-right" data-toggle="modal">New Room</a>
                </div>
            </div>
            <div class="col-md grid-margin transparent mt-4">
                <div class="row">
                    @foreach ($rooms as $room)
                    <div class="col-md-3 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="p-2">
                                <img class="card-img-top rounded-lg" src="/rooms_pic/kamar1.jpg" alt="Card image cap">
                            </div>
                            <div class="card-body">
                            <p class="">{{$room->name}}</p>
                            <p class="">{{$room->room_types->monthly_fee}}</p>
                            <p>Tipe : {{$room->room_types->name}}</p>
                            <button type="button" class="btn btn-warning"><i class="ti-pencil"></i>  Edit</button>
                            <a href="/rooms/delete/{{$room->id}}"><button type="button" class="btn btn-danger" onclick="return confirm ('Hapus {{$room->name}} dari Room?')"><i class="ti-trash"></i>  Delete</button></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
@endsection