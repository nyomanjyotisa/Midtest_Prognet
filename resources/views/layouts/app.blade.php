<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }} ">
  <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }} ">
  <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }} ">
  <link rel="stylesheet" href="{{ asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }} ">
  <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }} ">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/js/select.dataTables.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css') }} ">
  <link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }} " />
  <style>
	.modal-login {
		color: #636363;
		width: 500px;
		margin: 0px auto;
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
  @yield('style')
</head>
<body>
  <div class="container-scroller"> 
    @include('layouts.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.sidebar')
        @yield('content')
    </div>
  </div>

  <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }} "></script>
  <script src="{{ asset('template/vendors/chart.js/Chart.min.js') }} "></script>
  <script src="{{ asset('template/vendors/datatables.net/jquery.dataTables.js') }} "></script>
  <script src="{{ asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }} "></script>
  <script src="{{ asset('template/js/dataTables.select.min.js') }} "></script>
  <script src="{{ asset('template/js/off-canvas.js') }} "></script>
  <script src="{{ asset('template/js/hoverable-collapse.js') }} "></script>
  <script src="{{ asset('template/js/template.js') }} "></script>
  <script src="{{ asset('template/js/settings.js') }} "></script>
  <script src="{{ asset('template/js/todolist.js') }} "></script>
  <script src="{{ asset('template/js/dashboard.js') }} "></script>
  <script src="{{ asset('template/js/Chart.roundedBarCharts.js') }} "></script>
</body>
</html>

