<html>
<head>
    


    <link rel="stylesheet" type="text/css" href="garage.css">

</head>
<body>
<nav>
<h1>Keuzendeel menu</h1>
 <ul>
     <li> <a href="Aanmaak.html">Voeg een student toe aan een keuzedeel</a> </li>
     <li> <a href="Keuzedelenlijst.php">Keuzdelenlijst</a> </li>
     <li> <a href="update.html">Bewerk de gegevens van een student.</a> </li>
     <li> <a href="verwijder.html">Verwijder een student.</a> </li>
 </ul>


</nav>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keuzedelen2";

// Maakt de connectie
$conn = new mysqli($servername, $username, $password, $dbname);
// Checkt of de connectie het doet
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Neemt de gegevns op uit het html bestand en zet het om in variabelen
$naam = $_POST['Naam'];
$opleiding = $_POST['Opleiding'];
$keuze1 = $_POST['Keuze1'];
$keuze2 = $_POST['Keuze2'];
$keuze3 = $_POST['Keuze3'];
$id = $_POST['Schoolmail'];

// query om de gegevens te updaten
$sql = "UPDATE gegevens SET `Naam` ='".$naam."',`Opleiding`='".$opleiding."',`Keuze1`='".$keuze1."',`Keuze2`='".$keuze2."',`Keuze3`='".$keuze3."'
       WHERE Schoolmail='".$_POST['Schoolmail']."' ";

if ($conn->query($sql) === TRUE) {
    echo "<h1>
        Uw student is succesvol gewijzigd.
    </h1>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>