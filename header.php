<div id="header">

  <!-- Display Logo -->
  <a href="main.php">
    <img class="logo" src="assets/img/logo.png" alt="MC-Whitelist Logo">
  </a>

  <!-- Create Navbar -->
  <nav>
  <ul class="h-ul">
    <?php
      // If Signed In Display Profile Nav. If Not Display Sign In Nav.
      if (!isset($_SESSION["userid"])) {
        print ('<li class="h-li"><a class="h-li-a" href="sign-in.php">Sign In</a></li>');
      } else {
        print ('<li class="h-li"><a class="h-li-a" href="sign-out.php"><div class=h-logout><img class="h-logout-img" src="assets/img/logout.png" alt="logout"></div></a></li>');
        print ('<li class="h-li"><a class="h-li-a" href="user-profile.php">'.$_SESSION["username"].'</a></li>');
        print ('<li class="h-li"><a class="h-li-a" href="new-listing.php">List Your Server</a></li>');
      }
    ?>
    <li class="h-li"><a class="h-li-a" href="#">Browse All Servers</a></li>
  </ul>
  </nav>

  <!-- Display Line Below Header -->
  <div id="h-line"></div>
</div>
