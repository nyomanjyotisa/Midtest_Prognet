@extends('layouts.app')

@section('style')
<style>
	.modal-login {
		color: #636363;
		width: 500px;
		margin: 30px auto;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control:focus {
		border-color: #12b5e5;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
        transition: all 0.5s;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
    .modal-login input[type="checkbox"] {
        margin-top: 1px;
    }
    .modal-login .forgot-link {
        color: #12b5e5;
        float: right;
    }
	.modal-login .btn {
		background: #12b5e5;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #10a3cd;
	}
	.modal-login .modal-footer {
		color: #999;
		border: none;
		text-align: center;
		border-radius: 5px;
		font-size: 13px;
        margin-top: -20px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #12b5e5;
	}
	.trigger-btn {
		display: inline-block;
	}
</style>
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
                    <input type="hidden" name="id" id="customer{{$loop->iteration-1}}" value="{{$customer->id}}">
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>
                        <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                            <i class="ti-pencil"></i>
                        </button>
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
                            <input type="text" class="form-control" placeholder="Nama" required="required" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Alamat" required="required" name="alamat">					
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" required="required" name="phone">					
                        </div>
                        <div class="form-group">
                            <input type="radio" id="male" name="gender" value="male">
                            <label class="radio-inline" for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label class="radio-inline" for="female">Female</label><br>					
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Sign in">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection