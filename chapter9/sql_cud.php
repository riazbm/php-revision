<?php

//   SECTION A - CONNECT TO DATABASE

$pdo = new PDO("mysql:host=localhost;dbname=pawszone", "pz_admin", "@AB123m>?!09");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// SECTION B - CREATE TABLE
$sql = "CREATE TABLE IF NOT EXISTS pets (owner VARCHAR(255) NOT NULL, petname VARCHAR(255) NOT NULL, breed VARCHAR(255) NOT NULL, microchip VARCHAR(20), PRIMARY KEY(owner, petname))";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// SECTION C - INSERT DATA
$sql = "INSERT INTO pet (owner, petname, breed)
VALUES (:owner, :petname, :breed)";

$stmt = $pdo->prepare($sql);

$owner = array('Ted', 'Jamie', 'En', 'En');
$pname = array('Angel', 'Max', 'Boots', 'Dora');
$breed = array('Labradoodle', 'Domestic Shorthair', 'Domestic Shorthair', 'Munchkin');

for ($i = 0; $i < 4; ++$i){
    $stmt->bindValue(':owner', $owner[$i]);
    $stmt->bindValue(':pnamw', $pname[$i]);
    $stmt->bindValue(':breed', $breed[$i]);

     
}

// SECTION D - SELECT DATA
$sql = "UPDATE pets SET microchip = :micro WHERE owner = :owner AND petname = :petname";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':micro', '123456789');
$stmt->bindValue(':owner', 'Jamie');
$stmt->bindValue(':petname', 'Max');

$stmt->execute();

// SECTION E - DELETE DATA
$sql = "DELETE FROM pets WHERE owner = :owner AND petname = :petname";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':owner', 'Ted');
$stmt->bindValue(':petname', 'Angel');

$stmt->execute();

