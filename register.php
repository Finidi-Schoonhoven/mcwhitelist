<?php include("session.php");?>
<!DOCTYPE html>
<html>
<head>
  <!-- Include standart header code -->
  <?php include('head.php'); ?>

  <!-- Check If Redirected By Form -->
  <?php
    $checkmail = 0; // 0 == Correct, 1 == In Use, 2 == Invalid Adress
    $checkpass = 0; // 0 == Correct, 1 == Invalid Password, 2 == No Match Between pass1 And pass2

    // See If All Fields Were Set
    if (isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["pass1"]) && isset($_POST["pass2"])){
        //Check If Email Is In Use
        $stmt = $pdo->prepare("SELECT Email FROM user WHERE Email='" .strtolower($_POST["email"]) . "'");
        $stmt->execute();
        $userData = $stmt->fetch();

        if (!$userData) {
          if (str_contains($_POST["email"], "@") && str_contains($_POST["email"], ".") && strlen($_POST["email"]) > 5) {

          } else {
            $checkmail = 2;
          }
        } else {
          $checkmail = 1;
        }

        // Check If Passwords match
        if ($_POST["pass1"] == $_POST["pass2"]) {
          // Check If Password Meets Requirements (8-20 Chars, Uppercase, Lowercase & Number)
          if (preg_match('/[A-Z]/', $_POST["pass1"]) && preg_match('/[a-z]/', $_POST["pass1"]) && preg_match('/\d/', $_POST["pass1"]) && strlen($_POST["pass1"]) > 7 && strlen($_POST["pass1"]) < 21){

          } else {
            $checkpass = 1;
          }
        } else {
          $checkpass = 2;
        }

        // Register User If All Checks Pass
        if ($checkmail == 0 && $checkpass == 0) {
          $stmt = $pdo->prepare("INSERT INTO User (Username,Email,Password,Permission) Values (?,?,?,?)");
          $stmt->execute(array($_POST["username"],strtolower($_POST["email"]),$_POST["pass1"],1));

          // Send User To Sign In Page with main.php as lastPage
          $_SESSION["lastPage"] = "main.php";
          header('location: sign-in.php');
          exit();
        }

        // If Checks Dont Pass, Continue Loading The Body
        // If Body Loads With Both Checks On Zero, Assume Form Not Yet Used
    }
  ?>
</head>

<body>
<div class="bg">

  <!-- Add header with nav bar -->
  <?php include('header.php'); ?>

  <!-- Sign/Register In Container -->
  <div class="si-container">

    <!-- Register Form -->
    <form action="register.php" method="post">
      <!-- E-Mail -->
      <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email"  required>
      </div>

      <!-- Minecraft Username -->
      <div>
        <label for="username">Minecraft Username</label>
        <input type="text" name="username" id="username"  required>
      </div>

      <!-- Password -->
      <div>
        <label for="pass1">Password</label>
        <input type="password" name="pass1" id="pass1" required>
      </div>

      <!-- Repeat Password -->
      <div>
        <label for="pass2">Repeat Password</label>
        <input type="password" name="pass2" id="pass2" required>
      </div>

      <!-- Submit -->
      <input type="submit" value="Register">
    </form>

    <!-- Register Option For New Users -->
    <a href="sign-in.php"><p>Already have an account? Sign in here!</p></a>

  </div>

</div>
</body>
</html>
