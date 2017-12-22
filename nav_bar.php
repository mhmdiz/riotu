<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top ">
	<style type="text/css">
	ul.dropdown-lr {
		width: 300px;
	}
</style>
<!-- TOP BAR -->
<div class="nav-topbar clearfix ">
	<div class="container">
		<div class="left">
			<ul class="list-inline social-icons social-icons-small social-icons-fullrounded">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
		<div class="right">
			<form class="navbar-form navbar-left search-form" method="post" role="search">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://edu.gaitech.hk">Gaitech EDU</a></li>
				<li><a href="http://wiki.coins-lab.org">COINS WiKi</a></li>
				<li><a href="index.php" class="as-button"><span class="btn btn-primary">HOME</span></a></li>
				<li class="dropdown">
					<a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
						<div class="col-lg-12">
							<div class="text-center"><h3><b>Log In</b></h3></div>
							<form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-xs-7">
											<input type="checkbox" tabindex="3" name="remember" id="remember">
											<label for="remember"> Remember Me</label>
										</div>
										<div class="col-xs-5 pull-right">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
												<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
							</form>
						</div>
					</ul>
				</li>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
						<ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
							<div class="col-lg-12">
								<div class="text-center"><h3><b>Register</b></h3></div>
								<form id="ajax-register-form" action="http://phpoll.com/register/process" method="post" role="form" autocomplete="off">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6 col-xs-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Register Now">
											</div>
										</div>
									</div>
									<input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
								</form>
							</div>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- END TOP BAR -->
	<div class="container">
		<button type="button" class="navbar-toggle collapsed"
		data-toggle="collapse" data-target="#main-nav-collapse">
		<span class="sr-only">Toggle Navigation</span> <i
		class="fa fa-bars"></i>
	</button>
	
	
	<div id="main-nav-collapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav main-navbar-nav">
			<li><a href="index.php" ><span style="font-style: bold;">HOME</span></a></li>
			
			<li><a href="about.php">ABOUT <i></i></a></li>
			
			<li class="dropdown "><a href="research.php" class="dropdown-toggle" data-toggle="dropdown">RESEARCH <i class="fa fa-angle-down"></i></a>
			</li>
			<li class="dropdown "><a href="people.php" class="dropdown-toggle"
				data-toggle="dropdown">PEOPLE <i class="fa fa-angle-down"></i></a>
			</li>

			<li class="dropdown "><a href="facilities.php" class="dropdown-toggle"
				data-toggle="dropdown">FACILITIES <i class="fa fa-angle-down"></i></a>
			</li>

			<li class="dropdown "><a href="publications.php" class="dropdown-toggle"
				data-toggle="dropdown">PUBLICATIONS <i
				class="fa fa-angle-down"></i></a>
			</li>

			<li class="dropdown "><a href="events.php" class="dropdown-toggle"
				data-toggle="dropdown">EVENTS</a></li>

				<li class="dropdown "><a href="collaboration.php" class="dropdown-toggle"
					data-toggle="dropdown">COLLABORATION </a></li>
					<li class="dropdown "><a href="http://wiki.coins-lab.org"
						class="dropdown-toggle" data-toggle="dropdown">WIKI </a></li>

					<!-- 
					PSU LOGO
					
					<li><a href="index.php" class="navbar-brand"> <img
					src="images/psu-logo-square.png" width = "50%" style ="display:block; float: left;"  alt="PSU Logo">
				</a></li> -->
				
				
			</ul>
		</div>
		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
<!-- END NAVBAR -->
