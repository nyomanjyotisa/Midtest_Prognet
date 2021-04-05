@extends('layouts.app')

@section('style')

@endsection

@section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form action="/customers/update/{{$customer->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" required="required" name="name" value="{{ $customer->name }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" required="required" name="alamat" value="{{ $customer->address }}">					
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" required="required" name="phone"  value="{{ $customer->phone }}">					
                        </div>
                        <div class="form-group">
                          @if ($customer->gender=='male')
                        <label for="gender">Gender</label><br>
                            <input type="radio" id="male" name="gender" value="male" checked>
                            <label class="radio-inline" for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label class="radio-inline" for="female">Female</label><br>					
                        </div>
                        @else
                        <label for="gender">Gender</label><br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label class="radio-inline" for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female" checked>
                            <label class="radio-inline" for="female">Female</label><br>					
                        </div>
                        @endif
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
        </div>
    </div></div>
@endsection