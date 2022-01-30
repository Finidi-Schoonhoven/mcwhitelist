<?php include('session.php');?>
<!DOCTYPE html>
<html>
<!-- Sign User Out From Site -->
<?php
  //Unset all User Account Related $_SESSION Variables
  unset($_SESSION["userid"]);
  unset($_SESSION["permission"]);
  unset($_SESSION["username"]);

  //Return User To Homepage aka main.php
  header("location: main.php");
  exit();
?>
</html>
