@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form action="/transaction/update/{{$transaction->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="customer">Pilih Customer</label><br>
                            <select name="customer" id="customer" class="form-select dropdown_item_select" required>
                                <option>Piih Customer</option>
                                @foreach ($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>					
                        </div>
                        <div class="form-group">
                            <label for="room">Pilih Kamar</label><br>
                            <select name="room" id="room" class="form-select dropdown_item_select" required>
                                <option>Piih Kamar</option>
                                @foreach ($rooms as $room)
                                <option value="{{$room->id}}">{{$room->name}}</option>
                                @endforeach
                            </select>					
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration (dalam bulan)</label>
                            <input type="text" class="form-control" placeholder="duration(dalam bulan)" required="required" name="duration" value="{{$transaction->duration_month}}">
                        </div>
                        <div class="form-group">
                            <label for="duration">Tanggal Mulai</label>
                            <input type="date" id="tanggalmulai" class="form-control" required="required" name="tanggalmulai">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                        </div>
                    </form>
        </div>
        </div>
    </div>
    <script>
        document.getElementById("tanggalmulai").value = "{{$transaction->start_date}}";
        document.getElementById("customer").value = "{{$transaction->customer_id}}";
        document.getElementById("room").value = "{{$transaction->room_id}}";
    </script>
@endsection