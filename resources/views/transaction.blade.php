@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Transaction Kos</h4>
                    <p class="card-description">
                    Ini adalah daftar transaksi kosan.
                    </p>
                </div>
                <div class="text-center col">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" class="trigger-btn btn btn-success float-right" data-toggle="modal">New Transaction</a>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Customer</th>
                    <th>Kamar</th>
                    <th>Tanggal Ngekos</th>
                    <th>Durasi</th>
                    <th>Total Biaya</th>   
                    <th>Status Pembayaran</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{$transaction->id}}</td>
                        <td>{{$transaction->customers->name}}</td>
                        <td>{{$transaction->rooms->name}}</td>
                        <td>{{$transaction->start_date}}</td>
                        <td>{{$transaction->duration_month}} Bulan</td>
                        <td>Rp.{{$transaction->total_fee}}</td>
                        <td>{{$transaction->payment_status}}</td>
                        <td>
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                <i class="ti-pencil"></i>
                            </button>
                            <a href="/transaction/delete/{{$transaction->id}}">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" onclick="return confirm ('Hapus Transaksi dengan id {{$transaction->id}}?')">
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
    </div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Add New Transaction</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="/transaction/new" method="post" enctype="multipart/form-data">
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
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" placeholder="duration(dalam bulan)" required="required" name="duration">
                        </div>
                        <div class="form-group">
                            <label for="duration">Tanggal Mulai</label>
                            <input type="date" class="form-control" required="required" name="tanggalmulai">
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