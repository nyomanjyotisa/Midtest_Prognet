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
                        <td>Rp{{number_format($payment->amount)}}</td>
                        <td>{{$payment->proof_of_payment}}</td>
                        <td>
                            <a href="/payment/edit/{{$payment->id}}">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                    <i class="ti-pencil"></i>
                                </button>
                            </a>
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

    <!-- Modal HTML -->
<div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Add New Payment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="/payment/new" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="transaction">Pilih Trasaksi</label><br>
                            <select name="transaction" id="transaction" class="form-select dropdown_item_select" required>
                                <option>Piih Transaksi</option>
                                @foreach ($transactions as $transaction)
                                <option value="{{$transaction->id}}">{{$transaction->id}}</option>
                                @endforeach
                            </select>					
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Pembayaran</label>
                            <input type="text" class="form-control" placeholder="jumlah pembayaran" required="required" name="jumlah">
                        </div>
                        <div class="form-group">
                            <label for="file">Bukti Pembayaran</label><br>
                            <input type="file" name="file" id="form19" accept=".jpeg,.jpg,.png,.gif" onchange="preview_image(event)" required>					
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