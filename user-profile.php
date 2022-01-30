<?php include("session.php");?>
<!DOCTYPE html>
<html>
<head>
  <!-- Include standart header code -->
  <?php include('head.php');

  // Return to last page if not logged in
  if(!isset($_SESSION["userid"])) {
    header("location: ".$_SESSION["lastPage"]);
    exit();
  }
  ?>
</head>

<body>
<div class="bg">

  <!-- Add header with nav bar -->
  <?php include('header.php'); ?>

  <!-- Add General flex container -->
  <div class="up-flex">



  </div>

</div>
</body>
</html>
