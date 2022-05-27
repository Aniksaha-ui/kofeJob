<?php error_reporting(0);?>
<!-- Main Wrapper -->
<div class="main-wrapper">
<!-- Header -->
<header class="header">
	<nav class="navbar navbar-expand-lg header-nav">
		<div class="navbar-header">
			<a id="mobile_btn" href="javascript:void(0);">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>
			<a href="index.html" class="navbar-brand logo">
				<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
			</a>
		</div>
		<div class="main-menu-wrapper">
			<div class="menu-header">
				<a href="index.html" class="menu-logo">
					<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
				</a>
				<a id="menu_close" class="menu-close" href="javascript:void(0);">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<ul class="main-nav">
				{{-- <li class="active has-submenu">
					<a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
					<ul class="submenu">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="index-two.html">Home 2</a></li>
						<li><a href="index-three.html">Home 3</a></li>
						<li><a href="index-four.html">Home 4</a></li>
						<li><a href="index-five.html">Home 5</a></li>
					</ul>
				</li>
				 --}}
			
			
				
			</ul>
		</div>	
		@guest
		<ul class="nav header-navbar-rht">						
			<li><a href="{{url('register')}}" class="reg-btn"><i class="fas fa-user"></i> Register</a></li>
			<li><a href="{{url('login')}}" class="log-btn"><i class="fas fa-lock"></i> Login</a></li>
			<li><a href="post-project.html" class="login-btn">Post a Project </a></li>
		</ul>
		@else
		<h3 class="text-primary">Welcome to KofeJob Dashboard</h3>
		<ul class="nav header-navbar-rht">
			<li><a href="{{url('/post-project')}}" class="login-btn">Post a Project </a></li>
		<li><a href="{{route('user.logout')}}" class="reg-btn"><i class="fas fa-user"></i>Logout</a></li>
		</ul>
		@endguest	
		

	</nav>
</header>

		
<!-- /Header -->