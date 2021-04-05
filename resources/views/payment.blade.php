@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Payment Kos</h4>
                    <p class="card-description">
                    Ini adalah daftar payment kosan. Satu transaksi bisa banyak payment.
                    </p>
                </div>
                <div class="text-center col">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" class="trigger-btn btn btn-success float-right" data-toggle="modal">New Payment</a>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Id Transaksi</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Bukti Pembayaran</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    <tr>
                        <td>{{$payment->id}}</td>
                        <td>{{$payment->transaction_id}}</td>
                        <td>{{$payment->amount}}</td>
                        <td>{{$payment->proof_of_payment}}</td>
                        <td>
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                <i class="ti-pencil"></i>
                            </button>
                            <a href="/payment/delete/{{$payment->id}}">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" onclick="return confirm ('Hapus Paymnet dengan id {{$payment->id}}?')">
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