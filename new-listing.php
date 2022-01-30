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
  <div class="nl-flex">
    <!-- Listing Form -->
    <form action="new-listing.php" method="post">

      <!-- Server Name -->
      <div>
        <label for="sname">Server name</label>
        <input type="text" name="sname" id="sname"  required>
      </div>

      <!-- Minecraft Editon -->
      <div>
        <label for="edition">Game Edition</label>
        <select id="edition" name="edition">
          <option value="java">Java Edition</option>
          <option value="bedrock">Bedrock Edition</option>
      </select>
      </div>

      <!-- Modded Or Not -->
      <div>
        <label for="mod">Modded Server?</label>
        <select id="mod" name="mod">
          <option value="0">No (Vanilla or Realms)</option>
          <option value="1">Yes, Mod(s) required</option>
      </select>
      </div>

      <!-- Gamemode -->
      <div>
        <label for="mode">Main Gamemode</label>
        <select id="mode" name="mode">
          <option value="survival">Regular Survival</option>
          <option value="hardcore">Hardcore Survival</option>
          <option value="creative">Creative</option>
          <option value="minigame">Minigame(s)</option>
      </select>
      </div>

      <!-- Describe Server -->
      <div>
        <label for="desc">Description</label>
        <textarea id="desc" name="desc" placeholder="Describe your server and let people know what you expect from  potential new members!"></textarea>
      </div>

      <!-- Image -->
      <div>
        <label for="img">Add An Image</label>
        <input type="file" id="img" name="img" accept=".png, .jpg, .jpeg">
      </div>

      <!-- Submit -->
      <div>
        <input type="submit" value="Sign In">
      </div>
    </form>


  </div>

</div>
</body>
</html>
