@extends('layouts.app')

    @section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-md grid-margin transparent">
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
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
@endsection