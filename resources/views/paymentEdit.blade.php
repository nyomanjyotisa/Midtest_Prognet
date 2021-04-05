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
                  <form action="/payment/update/{{$payment->id}}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" placeholder="jumlah pembayaran" required="required" name="jumlah" value="{{$payment->amount}}">
                        </div>
                        <div class="form-group">
                            <label for="file">Bukti Pembayaran</label><br>
                            <img class="w-25 rounded-lg" src="/proof_of_payment/{{$payment->proof_of_payment}}" alt="Card image cap"><br>
                            <input type="file" name="file" id="form19" accept=".jpeg,.jpg,.png,.gif" onchange="preview_image(event)">					
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                        </div>
                    </form>
        </div>
        </div>
    </div>
    <script>
        document.getElementById("transaction").value = "{{ $payment->transaction_id }}";
    </script>
@endsection