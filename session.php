<!-- Sets up $_SESSION & Default variables-->
<?php
  session_start();

  //Saves current and last page, used to direct back in case of signing in
  if (isset($_SESSION["lastPage"])){
    $lastPage = $_SESSION["lastPage"];
  } else {
    $lastPage = basename($_SERVER['PHP_SELF']);
  }
  $_SESSION["lastPage"] = basename($_SERVER['PHP_SELF']);
?>
