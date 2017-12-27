<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Publication input</title>
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
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Publications</h1>
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

				<h2 class="section-heading">Enter new publication</h2>

				<div class="col-md-8">
					<form method="post" action="publication_insert.php"
						id="add-publication-form"
						class="form-horizontal form-minimal margin-top-30" novalidate>


						<div class="form-group">
							<label for="pub-title" class="control-label sr-only">Title</label>
							<input type="text" class="form-control" id="pub-title"
								name="title" placeholder="Title*" required>
						</div>

						<div class="form-group" id="authors-div">
							<label for="pub-author" class="control-label sr-only">Authors</label>
							<input type="text" class="form-control" id="pub-author"
								name="authors" placeholder="Authors name*" required>
						</div>

						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_calendar"></i>
									&nbsp; Year &nbsp; </span> <select class="form-control"
									name="year">
									<?php
									for ($i = 2000; $i <= 2020; $i++){
										if ($i==2017){
											echo "<option value='$i' selected> $i</option>";
										} else{
											echo "<option value='$i'> $i</option>";
										}
									}
									?>
								</select>

							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_calendar"></i>
									Month </span> <select class="form-control" name="month">
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_globe"></i>
									Publisher </span> <select class="form-control" name="publisher">
									<option value="Springer">Springer</option>
									<option value="IEEE">IEEE</option>
									<option value="ACM">ACM</option>
									<option value="Elsevier">Elsevier</option>
									<option value="Wiley">Wiley</option>
									<option value="Taylor and Francis">Taylor and Francis</option>
									<option value="Other">Other</option>
									<option value="Unknown">Unknown</option>

								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group input-group-lg">
								<span class="input-group-addon"><i class="icon icon_globe"></i>
									Category </span> <select class="form-control" name="category">
									<option value="journal">Journal</option>
									<option value="conference">Conference</option>
									<option value="book">Book</option>
									<option value="book_chapter">Book Chapter</option>

								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="pub-hlink" class="control-label sr-only">Hlink</label>
							<input type="text" class="form-control" id="pub-hlink"
								name="hlink" placeholder="Hlink*" required>
						</div>


						<div class="form-group">
							<div class="col-sm-12">
								<button id="submit-button" align="middle" type="submit" class="btn btn-primary">
									<i class="fa loading-icon"></i> <span>Submit Publication</span>
								</button>
							</div>
						</div>


						<input type="hidden" name="msg-submitted" id="msg-submitted"
							value="true">
					</form>
				</div>
				<?php



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
	var numberOfAuthors = 1;
	$("#f_add").click(function(e) {
	numberOfAuthors=numberOfAuthors+1;
	//alert(numberOfAuthors);
    var field = document.createElement('input');
	$("#number_of_authors").val(numberOfAuthors);
    $(field).attr('type', 'text').appendTo('form');;
    $(field).attr('class', 'form-control');
    $(field).attr('id', 'pub-author');
    $(field).attr('name', 'author'+numberOfAuthors);
    $(field).attr('placeholder', 'Author name');
    $("#authors-div").append(field);
    e.preventDefault();


//$('#add-publication-form').append('<input type="text" class="form-control" name="author"'+numberOfAuthors+' value="myvalue" placeholder="Author name"/>');



	});
	</script>




</body>

</html>
