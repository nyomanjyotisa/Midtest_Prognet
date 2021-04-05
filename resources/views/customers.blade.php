@extends('layouts.app')

@section('style')

@endsection

@section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Customer Kos</h4>
                    <p class="card-description">
                    Ini adalah para penghuni kosan.
                    </p>
                </div>
                <div class="text-center col">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" class="trigger-btn btn btn-success float-right" data-toggle="modal">New Customer</a>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>
                        <a href="/customers/edit/{{$customer->id}}">
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                <i class="ti-pencil"></i>
                            </button>
                        </a>
                        <a href="/customers/delete/{{$customer->id}}">
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" onclick="return confirm ('Hapus {{$customer->name}} Sebagai Customer?')">
                                <i class="ti-trash"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div></div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Add New Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="/customers/new" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" required="required" name="name">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" required="required" name="alamat">					
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" required="required" name="phone">					
                        </div>
                        <div class="form-group">
                        <label for="gender">Gender</label><br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label class="radio-inline" for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label class="radio-inline" for="female">Female</label><br>					
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection