<?php
  
  $pdo = new PDO("mysql:host=localhost;dbname=pawszone", "pz_admin", "@AB123m>?!09");

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $owner = $_POST['fullname'];

  $sql = "SELECT * FROM pets WHERE owner = '$owner'";
  $stmt = $pdo->query($sql);

