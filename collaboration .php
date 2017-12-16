<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - News</title>
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
<h1 class="page-title pull-left">Collaboration</h1>
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
<p>  </p>

<h2 class="section-heading">Collaboration</h2>
<div class="row">


        <?php
        $sql = "SELECT * FROM collaboration";
        $result = $dbconn->query($sql);
        $count=0;
        if ($result->num_rows >= 1) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo'<div class="col-lg-6">';
            echo "<a href='".$row["collaboration_link"]."'>";
            echo "<img src='".$row["collaboration_picture"]."'";
            echo 'width="40%" class="image-responsive center">';
            echo'</a>';
            echo'</div>';
            $count++;
              if($count%2==0){
                echo'</div>';
                echo'<div class="row">';
              }
          }
        }
        ?>
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
<a href="#top"><i class="fa fa-chevron-up"></i></a>
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
