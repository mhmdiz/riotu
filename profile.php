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
    if (!(isset($_SESSION["username"]))){
      header('location: index.php');
  } 
        if(!(isset($_SESSION["edit"]))){
        $_SESSION["edit"] = 0;
      }
        if(isset($_POST["edit"])){
          $_SESSION["edit"] = $_POST["edit"];
        }
        $edit = array(array(0,"Inactive"),array(1,"Active"));
        $sql = "SELECT * FROM users WHERE username = '" . $_SESSION["username"] . "'";
        $result = $dbconn->query($sql);
          $row = $result->fetch_assoc();
    ?>
<div id="wrapper">
    <?php
    include_once 'include/nav_bar.php';
    ?>
<!-- END NAVBAR -->
<!-- PAGE HEADER DEFAULT -->
<div class="page-header">
<div class="container">
<h1 class="page-title pull-left">Profile</h1>
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
  <p>You are <span class="text-danger"><?php echo $_SESSION["role"]?></span></p>
    <?php
    if($_SESSION["role"]=="admin"){
  echo '<p>Editing: is <span id="edit"> '.$edit[($_SESSION["edit"])][1].'.</span> <p>';
  echo '<form action='.$_SERVER["PHP_SELF"].' method="POST">';
  echo '<button type="submit" class="btn btn-success btn-lg" name="edit" value="1"><i></i> Activate</button>';
  echo '<button type="submit" class="btn btn-danger btn-lg" name="edit" value="0"><i></i> Deactivate</button>';
  echo '</form>';
}
?>
    
    
    
    <form action=<?php echo $_SERVER["PHP_SELF"];?> method="get">
  <div class="well center-block">
    <h3 class="section-heading">Information:</h3>
          <form class="form-horizontal label-right"
            action=<?php echo $_SERVER["PHP_SELF"];?> method="get">
            <div class="form-group">
              <label for="firstname" class="col-sm-3 control-label">First Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control"  id="firstname" name="firstname" value=<?php echo $row["firstname"];?>>
              </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Last Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  id="lastname" name="lastname" value=<?php echo $row["lastname"];?>>
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3  control-label">Username:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  id="username" name="username" disabled placeholder=<?php echo $row["username"];?>>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" name="email" value=<?php echo $row["email"];?>>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3  control-label">Current Password:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="password" name="password" value="">
                </div>
            </div>
                <div class="form-group">
                <label for="password2" class="col-sm-3  control-label">New Password:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="password2" name="password2" value="">
                </div>
            </div>
            <div class="form-group">
              <label for="birthdate" class="col-sm-3 control-label">Birth Date:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="birthdate" name="birthdate" value=<?php echo $row["birth_date"];?>>
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="col-sm-3 control-label">Phone:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="phone" name="phone" value=<?php echo $row["phone"];?>>
              </div>
            </div>
            <div class="form-group">
              <label for="office_phone" class="col-sm-3 control-label">Office Phone:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="office_phone" name="officephone" value=<?php echo $row["office_phone"];?>>
              </div>
            </div>
            <div class="form-group">
              <label for="address" class="col-sm-3 control-label">Address:</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="address" name="address" value=<?php echo $row["address"];?>></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="city" class="col-sm-3 control-label">City:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="city" name="city" value=<?php echo $row["city"];?>>
              </div>
            </div>
            <div class="form-group">
              <label for="country" class="col-sm-3 control-label">Country:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="country" name="country" value=<?php echo $row["country"];?>>
              </div>
            </div>
            <div class="form-group">
              <label for="website" class="col-sm-3 control-label">Website:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="website" name="website" value=<?php echo $row["website"];?>>
              </div>
            </div>

              <button type="submit" class="btn btn-primary btn-lg center-block" onclick="done()"><i></i> Update</button>
            </form>
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

  function edit(num){
    if(num ==1){

      document.getElementById("edit").innerHTML = "<span class='text-success'>Active</span>";
    }
    else{
      document.getElementById("edit").innerHTML = "<span class='text-danger'>Inactive</span>";
    }


  }
</script>

</body>

</html>
