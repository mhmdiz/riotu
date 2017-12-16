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
				$sql = "SELECT * FROM publication, publication_category, publication_indexing where publication.category= 3 and publication.category = publication_category.id and publication.indexing = publication_indexing.id order by publication.year DESC, publication.month ASC";
//echo $sql;

				$result = $dbconn->query($sql);
//echo $result->num_rows;
				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication ">';
						
						$sql_authors = "SELECT firstname, lastname FROM author,publication,author_publication
						WHERE author.aid=author_publication.author_id 
						and publication.pid=author_publication.publication_id and publication.pid=".$row['pid'];
						//echo $sql_authors;
						$result_authors = $dbconn->query($sql_authors);
						$authors="";
						while($row_author = $result_authors->fetch_assoc()){
							$authors=$authors.''.$row_author["firstname"].' '.$row_author["lastname"].', ';
						}


						$link=$row["hlink"];
						echo "<b><a href='".$link."'>".$row["title"]."</a></b>" ;
						echo "<br>".$authors;
						echo "<br><i class='gold'>".$row["booktitle"]."</i>,".getMonth($row["month"])." <b>".$row["year"]."</b>";
						echo "<br><b class='indexing'>".$row['publisher']."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

				?>

<br><br>			
<h3 class='stale_gray'>Journals</h3>

				<?php
				$sql = "SELECT * FROM publication, publication_category, publication_indexing where publication.category= 1 and publication.category = publication_category.id and publication.indexing = publication_indexing.id order by publication.year DESC, publication.month ASC";
//echo $sql;

				$result = $dbconn->query($sql);
//echo $result->num_rows;
				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication">';
						
						$sql_authors = "SELECT firstname, lastname FROM author,publication,author_publication
						WHERE author.aid=author_publication.author_id 
						and publication.pid=author_publication.publication_id and publication.pid=".$row['pid'];
						//echo $sql_authors;
						$result_authors = $dbconn->query($sql_authors);
						$authors="";
						while($row_author = $result_authors->fetch_assoc()){
							$authors=$authors.''.$row_author["firstname"].' '.$row_author["lastname"].', ';
						}


						$link=$row["hlink"];
						echo "<b><a href='".$link."'>".$row["title"]."</a></b>" ;
						echo "<br>".$authors;
						echo "<br><i class='gold'>".$row["booktitle"]."</i>, Vol.(".$row["volume"]."), Issue (".$row["issue"]."), ".getMonth($row["month"])." <b>".$row["year"]."</b>";
						echo "<br><b class='indexing'>".$row['publisher']."</b>, <b class='indexing'>impact factor: ".$row['impactfactor']."</b>, <b class='indexing'>".getIndexing($row["indexing"])."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

				?>
<br><br>
<h3 class='stale_gray'>Conferences</h3>

				<?php
				$sql = "SELECT * FROM publication, publication_category, publication_indexing where publication.category= 2 and publication.category = publication_category.id and publication.indexing = publication_indexing.id order by publication.year DESC, publication.month ASC";
//echo $sql;

				$result = $dbconn->query($sql);
//echo $result->num_rows;
				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication ">';
						
						$sql_authors = "SELECT firstname, lastname FROM author,publication,author_publication
						WHERE author.aid=author_publication.author_id 
						and publication.pid=author_publication.publication_id and publication.pid=".$row['pid'];
						//echo $sql_authors;
						$result_authors = $dbconn->query($sql_authors);
						$authors="";
						while($row_author = $result_authors->fetch_assoc()){
							$authors=$authors.''.$row_author["firstname"].' '.$row_author["lastname"].', ';
						}


						$link=$row["hlink"];
						echo "<b><a href='".$link."'>".$row["title"]."</a></b>" ;
						echo "<br>".$authors;
						echo "<br><i class='gold'>".$row["booktitle"]."</i>, ".getMonth($row["month"])." <b>".$row["year"]."</b>";
						echo "<br><b class='indexing'>".$row['publisher']."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

				?>

<br><br>
<h3 class='stale_gray'>Book Chapters</h3>

				<?php
				$sql = "SELECT * FROM publication, publication_category, publication_indexing where publication.category= 4 and publication.category = publication_category.id and publication.indexing = publication_indexing.id order by publication.year DESC, publication.month ASC";
//echo $sql;

				$result = $dbconn->query($sql);
//echo $result->num_rows;
				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication ">';
						
						$sql_authors = "SELECT firstname, lastname FROM author,publication,author_publication
						WHERE author.aid=author_publication.author_id 
						and publication.pid=author_publication.publication_id and publication.pid=".$row['pid'];
						//echo $sql_authors;
						$result_authors = $dbconn->query($sql_authors);
						$authors="";
						while($row_author = $result_authors->fetch_assoc()){
							$authors=$authors.''.$row_author["firstname"].' '.$row_author["lastname"].', ';
						}


						$link=$row["hlink"];
						echo "<b><a href='".$link."'>".$row["title"]."</a></b>" ;
						echo "<br>".$authors;
						echo "<br><i class='gold'>".$row["booktitle"]."</i>,".getMonth($row["month"])." <b>".$row["year"]."</b>";
						echo "<br><b class='indexing'>".$row['publisher']."</b>";
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
