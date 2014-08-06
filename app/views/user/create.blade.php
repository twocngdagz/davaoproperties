@extends('layout.admin')
@section('content')
<body class="tooltips">
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			@include('templates.admin.top_navbar')
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			@include('templates.admin.sidebar_menu')
			<!-- END SIDEBAR LEFT -->
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				<div class="container-fluid">
					<!-- Begin page heading -->
					<h1 class="page-heading">USERS</h1>
					<!-- End page heading -->
				
					<!-- Begin breadcrumb -->
					<ol class="breadcrumb default square rsaquo sm">
						<li><a href="{{action('HomeController@dashboard')}}"><i class="fa fa-home"></i></a></li>
						<li><a href="{{action('UsersController@show')}}">Users</a></li>
						<li class="active">Users List</li>
					</ol>
					<!-- End breadcrumb -->
					
					<!-- BEGIN DATA TABLE -->
					<div class="the-box">
						<div class="table-responsive">
						<table class="table table-striped table-hover" id="datatable-example">
							<thead class="the-box dark full">
								<tr>
									<th>Username</th>
									<th>Name</th>
									<th>Email</th>
									<th>Role</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
									<tr>
										<td>{{{$user->username}}}</td>
										<td>{{{$user->first_name}}} {{{$user->last_name}}}</td>
										<td>{{{$user->email}}}</td>
										<td>Role</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						</div><!-- /.table-responsive -->
					</div><!-- /.the-box .default -->
					<!-- END DATA TABLE -->
				<!-- BEGIN FOOTER -->
				<footer>
					&copy; 2014 <a href="#fakelink">Your company</a><br />
					Design by <a href="http://isohdesign.com/" target="_blank">ids</a>. Purchase this item at <a href="http://goo.gl/wSCjxD" target="_blank">Themeforest</a>
				</footer>
				<!-- END FOOTER -->
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
@stop