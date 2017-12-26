<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Research Area</title>
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
	<?php include_once 'include/nav_bar.php';?>

		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Research</h1>
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


				<?php
						        $sql = "SELECT * FROM realresearch";
						        $result = $dbconn->query($sql);
						        if ($result->num_rows >= 1) {
						          while($row = $result->fetch_assoc()){
						          echo '<h2 class="section-heading">'.$row["realresearch_title"].'</h2>';
						          echo '<div class="paragraph_large">'.$row["realresearch_description"];
						          $sql2 = "SELECT * FROM realresearch_info WHERE realresearch_points_id =".$row["realresearch_id"];
						        	$result2 = $dbconn->query($sql2);
						        			echo '<br><br>';
						       			    echo '<ul>';
						        		if ($result2->num_rows >= 1) {
						          		while($row2 = $result2->fetch_assoc()){
						       			    echo '<li>'.$row2["realresearch_points"].'</li>';
										}
										 
									}
									echo '</ul>';
									echo '<br>';
									echo '</div>';
								}
									
									 echo '<p align="middle"><a href="sumresreche.php" class="as-button"><span class="btn btn-primary">Submit Your Research</span></a></p>';
									echo '</div>';
							}

						          ?>

				
			
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
