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
                  <form action="/rooms/update/{{$room->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kamar</label>
                            <input type="text" class="form-control" placeholder="Nama" required="required" name="name" value="{{ $room->name }}">
                        </div>
                        <div class="form-group">
                            <label for="tipekamar">Tipe Kamar</label><br>
                            <select name="tipekamar" id="tipekamar" class="form-select dropdown_item_select" required>
                                <option>Piih Tipe Kamar</option>
                                @foreach ($roomtype as $roomtype)
                                <option value="{{$roomtype->id}}">{{$roomtype->name}} Rp{{number_format($roomtype->monthly_fee)}}/bulan</option>
                                @endforeach
                            </select>					
                        </div>
                        <div class="form-group">
                            <label for="file">Gambar</label><br>
                            <img class="w-25 rounded-lg" src="/rooms_pic/{{$room->picture}}" alt="Card image cap"><br>
                            <input type="file" name="file" id="form19" accept=".jpeg,.jpg,.png,.gif" onchange="preview_image(event)">					
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                        </div>
                    </form>
                </div>
              </div>
              <script>
                  document.getElementById("tipekamar").value = "{{ $room->room_type_id }}";
              </script>
@endsection