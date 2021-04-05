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
                    <th>Customer</th>
                    <th>Kamar</th>
                    <th>Tanggal Ngekos</th>
                    <th>Durasi</th>
                    <th>Status Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $transaction)
                    <td>{{$transaction->customers->name}}</td>
                    <td>{{$transaction->rooms->name}}</td>
                    <td>{{$transaction->start_date}}</td>
                    <td>{{$transaction->duration_month}} Bulan</td>
                    <td>{{$transaction->payment_status}}</td>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection