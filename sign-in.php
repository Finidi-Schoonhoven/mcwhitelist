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
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email"  required>

      <!-- Password -->
      <label for="pass">Password</label>
      <input type="password" name="pass" id="pass" required>

      <!-- Submit -->
      <input type="submit" value="Sign In">
    </form>

  </div>

</div>
</body>
</html>
