<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Facilities</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<!-- CORE CSS -->
<?php
include_once 'include/headers_links.php';
include_once 'include/utils.php';
?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php
    include 'include/dbconfig.php';
    ?>
	<?php
	include_once 'include/nav_bar.php';
	?>
		<!-- END NAVBAR -->
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Gallery</h1>
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






				<h2>RIOT Lab Gallery</h2>



				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<li data-target="#myCarousel" data-slide-to="6"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<?php
						$sql = 'SELECT * FROM gallery WHERE content_type = "picture"';
						$count = 0;
				$result = $dbconn->query($sql);
				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							echo '<div class="item';
							if($count==0){
								echo " active";
							}
							echo '">';
							echo '<img src="'.$row["content_link"].'" alt="'.$row["content_name"].'">';
							echo '</div>';
							$count++;
						}
					}
?>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel"
						data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a> <a class="right carousel-control" href="#myCarousel"
						data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<h2>Drone Virtual RIOT Lab Visit</h2>
				<?php
				$sql = 'SELECT * FROM gallery WHERE content_type = "video"';
				$result = $dbconn->query($sql);
				if ($result->num_rows >= 1) {
					while($row = $result->fetch_assoc()) {
							echo '<iframe width="800" height="600" src="'.$row["content_link"].'">';
							echo '</iframe>';
					}
				}
				?>
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
