<?php include("session.php");?>
<!DOCTYPE html>
<html>
<head>
  <!-- Include standart header code -->
  <?php include('head.php'); ?>
</head>

<body>
<div class="bg">

  <!-- Add header with nav bar -->
  <?php include('header.php'); ?>

  <!-- Sign In Container -->
  <div class="si-container">

    <!-- Sign In Form -->
    <form action="<?php echo $lastPage;?>" method="post">

      <!-- E-Mail -->
      <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email"  required>
      </div>

      <!-- Password -->
      <div>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" required>
      </div>

      <!-- Submit -->
      <input type="submit" value="Sign In">
    </form>

    <!-- Register Option For New Users -->
    <a href="register.php"><p>New here? Create your account now!</p></a>
  </div>

</div>
</body>
</html>
