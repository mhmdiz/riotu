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
				<li><a href="index.php"><span><img style="height: 100%" src="images/riotu-logo-w.png"></span></a></li>
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

				
				    <?php if (isset($_SESSION["username"])){
				    			echo '<li><a href="profile.php">PROFILE</a></li>';
							    echo '<li><a href="logout.php">SIGN OUT</a></li>';
							}else {
							    echo '<li><a href="login.php">SIGN IN</a></li>';
							echo '<li><a href="signup.php" class="as-button"><span class="btn btn-primary">SIGN UP</span></a></li>';
										}
										?>	
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
			
			<li><a href="research.php">RESEARCH <i></i></a>
			</li>
			<li><a href="people.php">PEOPLE <i></i></a>
			</li>

			<li><a href="facilities.php">FACILITIES <i></i></a>
			</li>

			<li><a href="publications.php">PUBLICATIONS <i></i></a>
			</li>

			<li><a href="events.php">EVENTS</a></li>

				<li><a href="collaboration.php">COLLABORATION </a></li>
					<li><a href="http://wiki.coins-lab.org">WIKI </a></li>

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