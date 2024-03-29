<?php
  $pdo = new PDO("mysql:host=localhost,dbname=pawszone", "wrongadmin", "@AB123m>?!09");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);