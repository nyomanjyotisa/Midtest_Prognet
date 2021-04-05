@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Hoverable Table</h4>
            <p class="card-description">
            Add class <code>.table-hover</code>
            </p>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Phone</th>
                    <th>Gender</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($customers as $customer)
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->gender}}</td>
                    @endforeach
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection