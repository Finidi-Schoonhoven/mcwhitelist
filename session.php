<!-- Sets up $_SESSION & Default variables-->
<?php
  session_start();

  //Saves current and last page, used to direct back in case of signing in
  $currentPage = basename($_SERVER['PHP_SELF']);
  if (isset($_SESSION["lastPage"])){
    // If current page is login or register, dont save new lastPage value
    if ($currentPage == "sign-in.php" || $currentPage == "register.php") {
      // Dont change anything, remember old value.
    } else {
      // If current page is NOT login or register, change LastPage to current page
      $_SESSION["lastPage"] = $currentPage;
    }
  } else {
    // If last page is not set, set it to current ldap_control_paged_result
    $_SESSION["lastPage"] = $currentPage;
  }
