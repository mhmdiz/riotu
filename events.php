<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Events</title>
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
				<h1 class="page-title pull-left">Events</h1>
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

				<h2 class="section-heading">Events</h2>
				<div class="container">
					<div class="blog-masonry clearfix">
						<div class="grid-sizer"></div>
						<div class="grid-item grid-item-width-2x">
							<div class="post-entry-card post-entry-featured">
								<?php
						        $sql = "SELECT * FROM events";
						        $result = $dbconn->query($sql);
						        if ($result->num_rows >= 1) {
						          // output data of each row
						          while($row = $result->fetch_assoc()) {
						          echo '<a href="#">';
						          echo "<img src='".$row["event_picture"]."'";
						          echo 'class="img-responsive" alt="Post Thumbnail">';
						          echo '</a>';
						          echo '<div class="post-info">';
						          echo '<h3 class="post-title">';
						          echo '<a href="#">'.$row["event_name"].'</a>';
						          echo '</h3>';
						          echo '<p class="post-excerpt">'.$row["event_description"].'</p>';
						          echo '<span class="post-meta"><i class="fa fa-calendar-o">';
						          echo '</i>'.$row["event_date"].'</span>';
						          echo "<a href='".$row["event_link"]."'";
						          echo 'class="read-more pull-right">Read More</a>';
							      }
						   	    }
          						?>
								</div>
							</div>
						</div>
					</div>
				</div>
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
