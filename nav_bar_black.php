<!-- NAVBAR -->
<nav
	class="navbar navbar-default navbar-fixed-top navbar-no-background navbar-light-font ignore-paddingtop">
	<div class="container">
		<button type="button" class="navbar-toggle collapsed"
			data-toggle="collapse" data-target="#main-nav-collapse">
			<span class="sr-only">Toggle Navigation</span> <i class="fa fa-bars"></i>
		</button>
		<a href="index.php" class="navbar-brand"> <img
			src="images/riotu-logo-w.png" alt="Bravana Logo">
		</a>
		<ul class="nav navbar-nav secondary-navbar-nav">
			
		</ul>
		<div id="main-nav-collapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav main-navbar-nav">
				<li><a href="about.php">ABOUT<i></i>
				</a></li>
				<li><a href="research.php">RESEARCH<i></i>
				</a>
				</li>
				<li><a href="people.php">PEOPLE<i></i>
				</a>
				</li>

				<li><a href="facilities.php">FACILITIES<i></i>
				</a>
				</li>

				<li><a href="publications.php">PUBLICATIONS<i></i>
				</a>
				</li>

				<li><a href="events.php">EVENTS</a></li>

				<li><a href="collaboration.php">COLLABORATION</a></li>
				<li><a href="http://wiki.coins-lab.org">WIKI</a></li>
					<?php if (isset($_SESSION["username"])){
								echo '<li><a href="profile.php">PROFILE</a></li>';
							    echo '<li><a href="logout.php">SIGN OUT</a></li>';
							}else {
							    echo '<li><a href="login.php">SIGN IN</a></li>';
							echo '<li><a href="signup.php">SIGN UP</a></li>';
										}
										?>


			</ul>
		</div>
		
		
		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
