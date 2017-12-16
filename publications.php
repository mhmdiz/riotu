<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Publications</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
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
	//session_start();
	?>

	<?php
	include_once 'include/nav_bar.php';
	?>
		<!-- END NAVBAR -->
		
		<!-- PAGE CONTENT -->
		<div class="page-content no-margin-bottom">
			<div class="container">
				<p></p>
<h3 class='stale_gray'>Books</h3>

				<?php
				$sql = "SELECT * FROM publications WHERE publication_type = 'book'";
				$result = $dbconn->query($sql);
				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication ">';
						echo "<b><a href='#'>".$row["publication_name"]."</a></b>" ;
						echo "<br>".$row["director"];
						echo "<br><i class='gold'>".$row["reference"]."</i>,".$row["date"]."</b>";
						echo "<br><b class='indexing'>".$row['website']."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

				?>

<br><br>			
<h3 class='stale_gray'>Journals</h3>

				<?php
				$sql = "SELECT * FROM publications WHERE publication_type = 'journal'";
				$result = $dbconn->query($sql);
				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication ">';
						echo "<b><a href='#'>".$row["publication_name"]."</a></b>" ;
						echo "<br>".$row["director"];
						echo "<br><i class='gold'>".$row["reference"]."</i>,".$row["date"]."</b>";
						echo "<br><b class='indexing'>".$row['website']."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

				?>
<br><br>
<h3 class='stale_gray'>Conferences</h3>

				<?php
				$sql = "SELECT * FROM publications WHERE publication_type = 'conference'";
				$result = $dbconn->query($sql);
				if ($result->num_rows >= 1) {
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication ">';
						echo "<b><a href='#'>".$row["publication_name"]."</a></b>" ;
						echo "<br>".$row["director"];
						echo "<br><i class='gold'>".$row["reference"]."</i>,".$row["date"]."</b>";
						echo "<br><b class='indexing'>".$row['website']."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

				?>

<br><br>
<h3 class='stale_gray'>Book Chapters</h3>

				<?php
				$sql = "SELECT * FROM publications WHERE publication_type = 'book_chapter'";
				$result = $dbconn->query($sql);
				if ($result->num_rows >= 1) {
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication ">';
						echo "<b><a href='#'>".$row["publication_name"]."</a></b>" ;
						echo "<br>".$row["director"];
						echo "<br><i class='gold'>".$row["reference"]."</i>,".$row["date"]."</b>";
						echo "<br><b class='indexing'>".$row['website']."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

				?>




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
