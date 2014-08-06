<div class="top-navbar">
	<div class="top-navbar-inner">
		
		<!-- Begin Logo brand -->
		<div class="logo-brand">
			<a href="{{action('HomeController@dashboard')}}"><img src="{{URL::asset('images/allea_logo.png')}}" alt="Davao Properties logo"></a>
		</div><!-- /.logo-brand -->
		<!-- End Logo brand -->
		
		<div class="top-nav-content">
			
			<!-- Begin button sidebar left toggle -->
			<div class="btn-collapse-sidebar-left">
				<i class="fa fa-long-arrow-right icon-dinamic"></i>
			</div><!-- /.btn-collapse-sidebar-left -->
			<!-- End button sidebar left toggle -->
			
			
			<!-- Begin button nav toggle -->
			<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
				<i class="fa fa-plus icon-plus"></i>
			</div><!-- /.btn-collapse-sidebar-right -->
			<!-- End button nav toggle -->
			
			
			<!-- Begin user session nav -->
			<ul class="nav-user navbar-right">
				<li class="dropdown">
				  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
					<img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar">
					Hi, <strong>Paris Hawker</strong>
				  </a>
				  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
					<li><a href="#fakelink">Account setting</a></li>
					<li><a href="#fakelink">Payment setting</a></li>
					<li><a href="#fakelink">Change password</a></li>
					<li><a href="#fakelink">My public profile</a></li>
					<li class="divider"></li>
					<li><a href="lock-screen.html">Lock screen</a></li>
					<li><a href="{{action('UsersController@logout')}}">Log out</a></li>
				  </ul>
				</li>
			</ul>
			<!-- End user session nav -->
			
			<!-- Begin Collapse menu nav -->
			<div class="collapse navbar-collapse" id="main-fixed-nav">
				<!-- Begin nav search form -->
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
				<!-- End nav search form -->
				
			</div><!-- /.navbar-collapse -->
			<!-- End Collapse menu nav -->
		</div><!-- /.top-nav-content -->
	</div><!-- /.top-navbar-inner -->
</div><!-- /.top-navbar -->