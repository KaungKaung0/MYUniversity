<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MY University</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{asset("bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset("bower_components/font-awesome/css/font-awesome.min.css")}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{asset("bower_components/Ionicons/css/ionicons.min.css")}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset("bower_components/admin-lte/dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="{{asset("bower_components/admin-lte/dist/css/skins/_all-skins.min.css")}}">
  	<!-- Summernote Editor -->
  	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
{{-- My CSS --}}
<link rel="stylesheet" href="{{asset("css/style.css")}}">
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		@include('layouts.header')

		@include('layouts.sidebar')
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<small>Control panel</small>
				</h1>
			</section>

			<!-- Main content -->
			<section class="content">
				@yield('content')
				
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		@include('layouts.footer')

	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="{{asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{asset("bower_components/jquery-ui/jquery-ui.min.js")}}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	
		$.widget.bridge('uibutton', $.ui.button);

	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
	<!-- Slimscroll -->
	<script src="{{asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
	<!-- FastClick -->
	<script src="{{asset("bower_components/fastclick/lib/fastclick.js")}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset("bower_components/admin-lte/dist/js/adminlte.min.js")}}"></script>
	<!-- Summernote Editor -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

	<!-- My Modified JS -->
	<script src="{{asset("js/myjs.js")}}"></script>
	</html>