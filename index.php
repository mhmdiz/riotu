<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
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
	include_once 'include/nav_bar_black.php';
	?>
		<!-- END NAVBAR -->
		<!-- SLIDER -->
		<section id="slider-fullwidth" class="rev_slider no-padding">
			<ul>

				<?php 
			$sql = 'SELECT * FROM  ads';
			$result = $dbconn->query($sql);
			if ($result->num_rows >= 1) {
				while ($row = $result->fetch_assoc()) {
					echo'<li data-transition="crossfade">';
					echo'<img src="'.$row["ad_background"].'" data-bgfit="cover"
					data-bgposition="center center" data-bgrepeat="no-repeat"
					alt="Slide">';
					echo'<div class="tp-caption tp-shape tp-shapewrapper " data-width="full"
						data-height="full" data-basealign="slide"
						data-transform_in="o:0;s:800;e:Power3.easeInOut;"
						data-transform_idle="o:1"
						data-transform_out="o:0;s:1500;e:Power3.easeInOut;" data-start="0">';
					echo'</div><div class="tp-caption tp-resizeme lead-text light-text text-center"
						data-x="center" data-y="center" data-hoffset="0"
						data-voffset="-100" data-transform_in="o:0;y:-20;s:2000;"
						data-transform_idle="o:1;"
						data-transform_out="o:0;s:1500;e:Power3.easeInOut;"
						data-start="1300">';
					echo'<h1 class="heading" style="margin-top: 120px">'.$row["ad_title"].'</h1>';
					echo'<p class="section-lead">'.$row["ad_info"].'</p>';
					echo'<a href="'.$row["ad_image_link"].'"><img src="'.$row["ad_image"].'" class="image-responsive center">';
					echo'</a></div><div class="tp-caption tp-resizeme" data-x="center" data-y="center"
						data-hoffset="0" data-voffset="[150, 170, 180, 200]"
						data-transform_in="o:0;y:50;s:2000;" data-transform_idle="o:1;"
						data-transform_out="o:0;y:0;s:1500;e:Power3.easeInOut;"
						data-start="1900" style="margin-top: 100px"';

						echo 'onclick="alert('."'coming soon'".');">';
					echo'<a href="'.$row["ad_botton_link"].'" class="btn btn-primary btn-lg">';
					echo'<i class="fa fa-shopping-cart"></i>'.$row["ad_botton_title"].'</a>';
					echo'</div></li>';
				}
			}	
		?>
			</ul>
		</section>
		<!-- FEATURES -->
		<section>
			<div class="container">
				<?php 
	$sql = 'SELECT * FROM  main_info';
	$result = $dbconn->query($sql);
	if ($result->num_rows >= 1) {
		while ($row = $result->fetch_assoc()) {
			echo '<div class="row">';
			echo '<div class="col-md-12">';
			echo '<div class="icon-info icon-info-left">';
			echo '<i class="'.$row["main_info_class"].'"></i>';
			echo '<div class="text">';
			echo '<h2 class="title museosans " style="font-size: 160%;">'.$row["main_info_title"];

							if($row["main_info_id"] == 1){ ////Publications
								echo '</h2>';
								$sql1 = "SELECT * FROM publications ORDER BY str_to_date(
								date,'%M %Y') DESC LIMIT 3";
						        $result1 = $dbconn->query($sql1);
						        if ($result1->num_rows >= 1) {
						          while ($row1 = $result1->fetch_assoc()) {
									echo '<div class="publication banner_news">';
									echo '<b><a href="'.$row1["publication_link"].'">';
									echo $row1["publication_name"].'</a></b><br>';
									echo $row1["director"].'<br><b>'.$row1["reference"].'</b>, '.$row1["date"].'</div>';
								  }
								}
							}
							else if($row["main_info_id"] == 2){ ////News
								echo '</h2>';
								echo '<div class="row">';
								$sql2 = 'SELECT * FROM  news';
						        $result2 = $dbconn->query($sql2);
						        //$count=0;
						        if ($result2->num_rows >= 1) {
						          while ($row2 = $result2->fetch_assoc()) {
									echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 banner_news">';
									echo '<h4>'.$row2["news_name"].'</h4>';
									echo '<p><a href="#">Nov 1, 2017</a> '.$row2["news_description"].'</p><br>';
									echo '</div>';
								   }
								}
								echo '</div>';							
							}
							else if($row["main_info_id"] == 3){	//Newsletter								
						        $sql3 = "SELECT * FROM  newsletter";
						        $result3 = $dbconn->query($sql3);
						          $row3 = $result3->fetch_assoc(); 
								 echo ', '.$row3["newsletter_date"].'</h2>';
								 echo '<div class="row">';
								 echo '<div class="col-lg-8">';
								 echo '<a href="'.$row3["newsletter_link"].'">';
								 echo '<img src="'.$row3["newsletter_image"].'" width="60%" class="image-responsive center"> </a>';
								 echo '</div>';			
								 }

							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';

		}
	}
				?>

			</div>
		</section>
		<!-- FOOTER -->
		<?php
		include_once 'include/footer.php';
		?>
		<!-- END FOOTER -->
		<div class="back-to-top">
			<a href="#top"><i class="fa fa-chevron-up"></i> </a>
		</div>

		<!-- END WRAPPER -->
		<!-- JAVASCRIPT -->
		<script src="theme/assets/js/jquery-2.1.1.min.js"></script>
		<script src="theme/assets/js/bootstrap.min.js"></script>
		<script src="theme/assets/js/plugins/easing/jquery.easing.min.js"></script>
		<script
			src="theme/assets/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script
			src="theme/assets/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="theme/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="theme/assets/js/bravana.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript"
			src="theme/assets/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


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
