<html>
<head>
<link rel="stylesheet" type="text/css" href="garage.css">

</head>

<body>

<nav>
<h1>Hier is een overzicht van alle studenten die een keuzedeel gekozen hebben.</h1>
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

//QUERY wordt uitgevoerd om de gegevens uit te voeren
$sql = "SELECT Naam, Opleiding, Keuze1, Keuze2, Keuze3, Schoolmail FROM gegevens";
$result = $conn->query($sql);

//Geeft de gegevens in een tabel weer

if ($result->num_rows > 0) {
    echo "<table class='read' border = 1>";
    echo "<td>Naam</td>";
    echo "<td>Opleiding</td>";
    echo "<td>Keuze1</td>";
    echo "<td>Keuze2</td>";
    echo "<td>Keuze3</td>";
    echo "<td>Schoolmail</td>";
    while($row = $result->fetch_assoc()) {

        echo "<tr>" . "<td>" . $row["Naam"] . "</td>" . "<td>" .  $row["Opleiding"] .
            "</td>" . "<td>" . $row["Keuze1"] . "</td>". "<td>" . $row["Keuze2"] . "</td>" .
        "<td>" . $row["Keuze3"] .  "</td>" . "<td>" . $row["Schoolmail"] .  "</td>" . "<br>";
        echo "</tr>";

    }
    echo "</table>";
} else {
    echo "<h1>Geen resultaten gevonden</h1>";
}
$conn->close();
?>

