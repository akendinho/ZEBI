<html>
<head>
    <link rel="stylesheet" type="text/css" href="garage.css">
<body>

<nav>
<h1>Verwijder een student</h1>
 <ul>
     <li> <a href="Aanmaak.html">Voeg een student toe aan een keuzedeel</a> </li>
     <li> <a href="Keuzedelenlijst.php">Keuzdelenlijst</a> </li>
     <li> <a href="update.html">Bewerk de gegevens van een student.</a> </li>
     <li> <a href="verwijder.html">Verwijder een student.</a> </li>
 </ul>


</nav>
</body>
</head>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keuzedelen2";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  if (isset($_POST)) {

    $id = $_POST['Namen'];

  $sql = "DELETE FROM gegevens WHERE Schoolmail='$id'";
  }
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<h1>De student is succesvol verwijderd</h1>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>