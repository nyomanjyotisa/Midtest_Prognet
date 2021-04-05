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
@endsection