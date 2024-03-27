<?php
  
  $pdo = new PDO("mysql:host=localhost;dbname=pawszone", "pz_admin", "ABCD");

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $owner = $_POST['fullname'];

  $sql = "SELECT * FROM pets WHERE owner = '$owner'";
  $stmt = $pdo->query($sql);

