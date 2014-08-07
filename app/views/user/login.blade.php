@extends('layout.admin')
@section('content')
<body class="login tooltips">
	<div class="login-header text-center">
		<img src="{{URL::asset('images/allea_logo.png')}}" class="logo" alt="Logo">
	</div>
	<div class="login-wrapper">
		<!-- <form role="form" action="http://diliat.in/themeforest/sentir/1.0.0/index.html">
			<div class="form-group has-feedback lg left-feedback no-label">
			  <input type="text" class="form-control no-border input-lg rounded" placeholder="Enter username" autofocus>
			  <span class="fa fa-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback lg left-feedback no-label">
			  <input type="password" class="form-control no-border input-lg rounded" placeholder="Enter password">
			  <span class="fa fa-unlock-alt form-control-feedback"></span>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">LOGIN</button>
			</div>
		</form> -->
		<form method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
		    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
		    <fieldset>
		        <div class="form-group">
		            <label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
		            <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
		        </div>
		        <div class="form-group">
		        <label for="password">
		            {{{ Lang::get('confide::confide.password') }}}
		            <small>
		                <a href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
		            </small>
		        </label>
		        <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
		        </div>
		        <div class="form-group">
		            <label for="remember" class="checkbox">{{{ Lang::get('confide::confide.login.remember') }}}
		                <input type="hidden" name="remember" value="0">
		                <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
		            </label>
		        </div>
		        @if (Session::get('error'))
		            <div class="alert alert-error">{{{ Session::get('error') }}}</div>
		        @endif

		        @if (Session::get('notice'))
		            <div class="alert">{{{ Session::get('notice') }}}</div>
		        @endif
		        <div class="form-group">
		            <button tabindex="3" type="submit" class="btn btn-default">{{{ Lang::get('confide::confide.login.submit') }}}test</button>
		        </div>
		    </fieldset>
		</form>
	</div>
@stop