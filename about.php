<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - About</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<?php
include_once 'include/headers_links.php';
?>
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
				<h1 class="page-title pull-left">ABOUT</h1>
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
				<?php
								$flag = true;
								if ($flag)
									$edit = 'contenteditable="true"';
						        $sql = "SELECT * FROM  about";
						        $result = $dbconn->query($sql);
						        if ($result->num_rows >= 1) {
						          // output data of each row
						          $row = $result->fetch_assoc();

						          echo '<a href="#">';
						          echo '<img src="'.$row["about_picture"].'" width="70%" class="image-responsive center">';
						          echo '</a> <br> <br> <br>';
						          echo '<p id="" class="paragraph_large editable">'.$row["about_description"].'</p>';
						          echo '<h2 class="section-heading">VISION</h2>';
						          echo '<p id="about_vision" class="paragraph_large editable" '.$edit.'>'.$row["about_vision"].'</p>';
						          echo '<h2 class="section-heading">MISSION</h2>';
						          echo '<ul class="paragraph_large">';
						      	}		
						          $sql = 'SELECT * FROM  about';
						        $result = $dbconn->query($sql);
						        $count=0;
						        if ($result->num_rows >= 1) {
						          while ($row = $result->fetch_assoc()) {
						          	if($count>=2){
						          	}else{
						          	echo '<li>'.$row["about_mission"].'</li>';
						          	$count++;
						          }
						          }
						           echo '<p align="right"><a href="index.php" class="as-button"><span class="btn btn-primary">Edit</span></a></p>';
						      	}
						      	echo '</ul>';
						      	echo '<h2 class="section-heading">OBJECTIVES</h2>';
						      	echo '<ul class="paragraph_large">';

						      	$sql = 'SELECT * FROM  about WHERE "about_objective" IS NOT NULL';
						        $result = $dbconn->query($sql);
						        if ($result->num_rows >= 1) {
						          while ($row = $result->fetch_assoc()) {
						          	echo '<li>'.$row["about_objective"].'</li>';
						          }
						      	}
				?>
				</ul>
			</div>
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
	<script src="js/about.js"></script>

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
