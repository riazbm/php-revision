<?php
//   selection A = connecting to the database
$pdo = new PDO("mysql:host=localhost;dbname=pawszone", "pz_admin", "@AB123m>?!09");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// section B - select all rows from pets
$sql = "SELECT petname, owner FROM pets";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo '<br>owner = '.$row['owner']. '<br>';
    echo 'Pet Name = '.$row['petname']. '<br>';
}
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_NUM)){
    echo '<br>Owner = '.$row[1]. '<br>';
    echo '<br>Pet Name = '.$row[0]. '<br>';
}