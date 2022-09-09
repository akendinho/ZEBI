<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Student toevoegen</title>
    <link rel="stylesheet" type="text/css" href="garage.css">
</head>
<body>
<nav>
    <h1>Student toevoegen</h1>
<ul>
    <li> <a href="Aanmaak.html">Voeg een student toe aan een keuzedeel</a> </li>
    <li> <a href="Keuzedelenlijst.php">Keuzdelenlijst</a> </li>
    <li> <a href="update.html">Bewerk de gegevens van een student.</a> </li>
    <li> <a href="verwijder.html">Verwijder een student.</a> </li>
</ul>
</nav>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keuzedelen2";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
if (isset($_POST)) {

    $naam = $_POST['Naam'];
    $opleiding = $_POST['Opleiding'];
    $keuze1 = $_POST['Keuze1'];
    $keuze2 = $_POST['Keuze2'];
    $keuze3 = $_POST['Keuze3'];
    $schoolmail = $_POST['Schoolmail'];

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO gegevens (Naam, Opleiding, Keuze1, Keuze2, Keuze3, Schoolmail)
  VALUES ('$naam', '$opleiding', '$keuze1','$keuze2', '$keuze3', '$schoolmail')";
}
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<h1>De student is toegevoegd ";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>