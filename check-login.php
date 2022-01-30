<!-- Checks If User Just Signed In And Processes This -->
<?php
if (isset($_POST["email"]) && isset($_POST["pass"])){

  //Get User Data Based On Email
  $stmt = $pdo->prepare("SELECT Userid, Username, Password, Permission FROM user WHERE Email='" .strtolower($_POST["email"]) . "'");
  $stmt->execute();
  $userData = $stmt->fetch();

  //Temp Store Userdata
  $userId = $userData["Userid"];
  $userPass = $userData["Password"];
  $userPerm = $userData["Permission"];
  $userName = $userData["Username"];

  //Check Credentials & User Permission State

  //Correct Credentials
  if ($_POST["pass"] == $userPass){
    //Check If User Is Banned
    if ($userPerm == 0) {
      // User Is Banned
      header("location: sign-in.php?fail=ban");
      exit();
    } else {
      //Set Session Variables
      $_SESSION["userid"] = $userId;
      $_SESSION["permission"] = $userPerm;
      $_SESSION["username"] = $userName;  
    }
  } else {
    //Deal With Incorrect Credentials
    //Send user back to Sign In page
    header("location: sign-in.php?fail=cred");
    exit();
  }
}
?>
