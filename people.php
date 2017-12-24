<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - People</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<link href="theme/assets/css/bootstrap.css" rel="stylesheet"
	type="text/css">
<link href="theme/assets/css/font-awesome.min.css" rel="stylesheet"
	type="text/css">
<link href="theme/assets/css/elegant-icons.css" rel="stylesheet"
	type="text/css">
<!-- THEME CSS -->
<link href="theme/assets/css/main.css" rel="stylesheet" type="text/css">
<link href="theme/assets/css/my-custom-styles.css" rel="stylesheet"
	type="text/css">
<link href="theme/assets/css/riot.css" rel="stylesheet" type="text/css">

<!-- GOOGLE FONTS -->
<link
	href='https://fonts.googleapis.com/css?family=Raleway:700,400,400italic,500'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300,300italic'
	rel='stylesheet' type='text/css'>
<!-- FAVICONS -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="theme/assets/ico/bravana144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="theme/assets/ico/bravana114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="theme/assets/ico/bravana72.png">
<link rel="apple-touch-icon-precomposed"
	href="theme/assets/ico/bravana57.png">
<link rel="shortcut icon" href="theme/assets/ico/favicon.ico">
</head>

<body>
	<?php
    include 'include/dbconfig.php';
    session_start();
    ?>
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php
	include_once 'include/nav_bar.php';
	?>
		<!-- END NAVBAR -->
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">People</h1>
				<ol class="breadcrumb link-accent">
					<li><a href="index.php">Home</a></li>

					<li class="active">Has Navigation Links</li>
				</ol>
			</div>
		</div>
		<!-- END PAGE HEADER DEFAULT -->
		<!-- PAGE CONTENT -->
		<div class="page-content no-margin-bottom">
			<div class="container">
				<p></p>

				<!-- TEAM -->
				<section>
					<div class="container">
						<h2 class="section-heading">Our Team</h2>
						<div class="row">



				<?php
		        $sql = "SELECT * FROM person";
		        $result = $dbconn->query($sql);
		        $count=0;
		        if ($result->num_rows >= 1) {
		          while($row = $result->fetch_assoc()) {
		          	echo '<div class="col-sm-4">';
		          	echo '<div class="team-member">';
		          	echo '<div class="member-info">';
		          	echo '<h3 class="name"><a href="'.$row["person_website"].'">'.$row["person_name"].'</a></h3>';
		          	echo '<span class="title">'.$row["person_level"].'</span>';
		          	echo '<p class="short-bio keywords">'.$row["person_major"].'</p>';
		          	echo '<address class="contact-info">';
		          	echo '<p class="sm">';
		          	echo '<i class="icon icon_pin_alt ico-styled text-primary "></i>'.$row["person_location"].'</p>';
		          	echo '<p class="sm">';
		          	echo '<i class="icon icon_phone ico-styled text-primary "></i>'.$row["person_phone"].'</p><p>';
		          	echo '<i class="icon icon_mail_alt ico-styled text-primary"></i>';
		          	echo '<a href="mailto:'.$row["person_email"].'">'.$row["person_email"].'</a></p></address>';
		          	echo '<ul class="list-inline social-icons social-icons-small">';
		          	echo '<li><a href="'.$row["social_facebook"].'" class="facebook-bg-hover"><i class="fa fa-facebook"></i> </a></li>';
		          	echo '<li><a href="'.$row["social_website"].'" class="dribbble-bg-hover"><i class="fa fa-dribbble"></i> </a></li><li>';
		          	echo '<a href="'.$row["social_linkedin"].'" class="linkedin-bg-hover">';
		          	echo '<i class="fa fa-linkedin"></i> </a></li>';
		          	echo '<li><a href="'.$row["social_twitter"].'" class="twitter-bg-hover">';
		          	echo '<i class="fa fa-twitter"></i> </a></li></ul>';
		          	echo '</div></div></div>';
		          	$count++;
		          		if($count%3==0){							
							echo'</div>';
							echo '<br>';
							echo '<br>';
               	  		    echo'<div class="row">';
              		 	}
                  }
          	    }
          	?>
						</div>
					</div>
				</section>
				<!-- END TEAM -->




			</div>
			<!--
<div class="cta cta-solid-bg cta-2-columns margin-top-50">
<div class="container">
<h2 class="heading">An elegant Bootstrap theme with tons of features</h2>
<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> PURCHASE</a>
</div>
</div>
-->
		</div>
		<!-- END PAGE CONTENT -->
		<!-- FOOTER -->
		<?php
		include_once 'include/footer.php';
		?>
		<!-- END FOOTER -->
		<div class="back-to-top">
			<a href="#top"><i class="fa fa-chevron-up"></i> </a>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPT -->
	<script src="theme/assets/js/jquery-2.1.1.min.js"></script>
	<script src="theme/assets/js/bootstrap.min.js"></script>
	<script src="theme/assets/js/plugins/easing/jquery.easing.min.js"></script>
	<script src="theme/assets/js/bravana.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54522619-4', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
