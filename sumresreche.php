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


				<div class="page-content no-margin-bottom">
					<div class="container">
						<p></p>


						<form action="sumresreche.php" method="get">
							<div class="form-group">
								<label for="exampleInputEmail1">Research Title</label>
								<input type="Name" class="form-control" name="research_title" id="exampleInputName" aria-describedby="NameHelp" placeholder="Enter Research Title">
								<div class="form-group">
									<label for="exampleInputEmail1">Name</label>
									<input type="Name" class="form-control" name="name" id="exampleInputName" aria-describedby="NameHelp" placeholder="Enter Your Name">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" name="email_address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group">
									<label for="exampleSelect1">Research Type</label>
									<select class="form-control" name="research_type" id="researchSelect1">
										<option>Robotics</option>
										<option>Internet Of Things</option>
										<option>Wireless Sensor Networks</option>
										<option>Cloud Computing</option>
										<option>Robot Operating System</option>
										<option>5G Wireless Networks</option>
										<option>Robotics Path Planning</option>
										<option>Network and Communication</option>
										<option>-Other</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleTextarea">Reference</label>
									<textarea class="form-control" name="reference" id="exampleTextarea" rows="13" placeholder="Write Reference In APA Style"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">File input</label>
									<input type="file" class="form-control-file" name="file_input" id="exampleInputFile" aria-describedby="fileHelp">
									<small id="fileHelp" class="form-text text-muted">only PDF file you can sumbit any other type will reject</small>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input">
										by clicking this you agree to our Terms Of Service.
									</label>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
							<?php
							if (isset($_GET["research_title"])&& isset($_GET["name"]) && isset($_GET["research_type"]) && isset($_GET["reference"]) && isset($_GET["file_input"])){


								$res_title = $_GET["research_title"];
								$res_name = $_GET["name"];
								$res_email = $_GET["email_address"];
								$res_type = $_GET["research_type"];
								$res_reference = $_GET["reference"];
								$res_file = $_GET["file_input"];

							$sql = 'INSERT INTO research ( research_title, researher_name, researcher_email, research_type, reference, research_document) VALUES ( "'.$res_title.'","'.$res_name.'","'.$res_email.'","'.$res_type.'","'.$res_reference.'","'.$res_file.'")';
							echo $sql;
							$result = $dbconn->query($sql);
							//echo $result;
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
