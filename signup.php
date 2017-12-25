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
  <?php
    include 'include/dbconfig.php';
    session_start();
    ?>
<!-- WRAPPER -->
<?php
        
  if (isset($_SESSION["username"])){
    header('location: index.php');
  }
    if (! isset($_POST["signup-firstname"]) ||
         ! isset($_POST["signup-lastname"]) ||
          ! isset($_POST["signup-username"]) ||
           ! isset($_POST["signup-email"]) ||
             ! isset($_POST["signup-password"])) {

    } else {

        $firstname = $_POST["signup-firstname"];
        $lastname = $_POST["signup-lastname"];
        $username = $_POST["signup-username"];
        $email = $_POST["signup-email"];
        $password = $_POST["signup-password"];
        $date = date("Y-m-d");
        $role = "member";
        
        $sql = "INSERT INTO users VALUES (NULL, '".$firstname."', '".$lastname."', '".$username."', '".$password."', '".$role."', NULL, '".$date."', '', '', '', '', '', '".$email."', '')";   
        $result = $dbconn->query($sql);
        // $_SESSION["username"] = $username;
        // $_SESSION["firstname"] = $firstname;
        // $_SESSION["lastname"] = $lastname;
        // $_SESSION["role"] = $role;
        header('location: login.php');
      }
    
    ?>

<div id="wrapper">
    <?php
    include_once 'include/nav_bar.php';
    ?>
<!-- END NAVBAR -->
<!-- PAGE HEADER DEFAULT -->
<div class="page-header">
<div class="container">
<h1 class="page-title pull-left">Sign Up</h1>
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

<div class="row">
  
  <div class="well well-form-wrapper center-block">
<h3 class="section-heading">Sign Up</h3>
          <form class="form-horizontal label-left"
            action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">
            <div class="form-group">
              <label for="signup-firstname" class="col-sm-3 control-label">First Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="signup-firstname" name="signup-firstname" required>
              </div>
            </div>
            <div class="form-group">
                <label for="signup-lastname" class="col-sm-3 control-label">Last Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="signup-lastname"
                  name="signup-lastname" required>
                </div>
              </div>
              <div class="form-group">
                <label for="signup-username" class="col-sm-3  control-label">Username:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="signup-username"
                  name="signup-username" required>
                </div>
              </div>
              <div class="form-group">
                <label for="signup-email" class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="signup-email" name="signup-email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="signup-password" class="col-sm-3  control-label">Password:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="signup-password" name="signup-password" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-9 col-md-offset-3">
                  <label class="fancy-checkbox">
                    <input type="checkbox" required>
                    <span>I accept <a href="#">Privacy Policy</a> and the <a href="#">Terms and  Agreements</a></span>
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg center-block" onclick="done()"><i></i> SIGN UP</button>
            </form>
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
  function done(){
  var x = document.getElementsByName("signup-password")[0].value;
    if(x != ""){
    alert("Signed Up Successfully.");
    }
  }
</script>

</body>

</html>
