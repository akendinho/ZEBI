<script>
    function Tekens(input){
        var regex = /[^a-z]/gi;
        input.value = input.value.replace(regex, "");
    }


</script>
<html>
<head>


    <link rel="stylesheet" type="text/css" href="garage.css">

</head>
<body>
<nav>
<h1>Gegevens bewerken</h1>
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

//Zet de gegevens van html om naar variabelen
$id = $_POST['namen'];

// Voert de update query uit
$sql = "SELECT Naam, Opleiding, Keuze1, Keuze2, Keuze3, Schoolmail FROM gegevens where Schoolmail = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {


?>
<!--Laat de gegevens zien in vakjes-->

        <form action="update1.php" method="post">

         Naam:   <input type="text" name="Naam" value="<?php echo $row['Naam'];?>" onkeyup="Tekens(this)" required> <br> <br>

         Opleiding:    <select type="text" name="Opleiding">

       <option value="<?php echo $row['Opleiding'];?>"><?php echo "Jouw gekozen opleiding was:" . $row['Opleiding'];?></option>
       <option value="Softwarer developer">Softwarer developer</option>
       <option value="Allround medewerker IT systems and devices">Allround medewerker IT systems and devices</option>
       <option value="Expert IT and devices">Expert IT and devices</option>
    
                </select><br><br>

                Keuze1:    <select type="text" name="Keuze1">

       <option value="<?php echo $row['Keuze1'];?>"><?php echo "Jouw gekozen keuzedeel was:" . $row['Keuze1'];?></option>
       <option value="Microcontrollers">Microcontrollers</option>
       <option value="Frontend">Frontend</option>
       <option value="Mobile apps">Mobile apps</option>
       <option value="HBO Wiskunde">HBO Wiskunde</option>
    
                </select><br><br>

                Keuze2:    <select type="text" name="Keuze2">

       <option value="<?php echo $row['Keuze2'];?>"><?php echo "Jouw gekozen keuzedeel was:" . $row['Keuze2'];?></option>
       <option value="Microcontrollers">Microcontrollers</option>
       <option value="Frontend">Frontend</option>
       <option value="Mobile apps">Mobile apps</option>
       <option value="HBO Wiskunde">HBO Wiskunde</option>
    
                </select><br><br>

                Keuze3:    <select type="text" name="Keuze3">

       <option value="<?php echo $row['Keuze3'];?>"><?php echo "Jouw gekozen keuzedeel was:" . $row['Keuze3'];?></option>
       <option value="Microcontrollers">Microcontrollers</option>
       <option value="Frontend">Frontend</option>
       <option value="Mobile apps">Mobile apps</option>
       <option value="HBO Wiskunde">HBO Wiskunde</option>
    
                </select><br><br>

         

         Schoolmail:   <input type="email" readonly name="Schoolmail" value="<?php echo $row['Schoolmail'];?>"><br><br>

            <input onclick="functie()" type="submit" name="search" value="Update">
            <script>
                function functie() {
                    confirm("Weet u zeker dat u deze student wilt wijzigen?");
                }
            </script>

        </form>
       
    
    



<?php
    }

    echo "<a href=\"menu.php\">terug naar het menu</a>";
} else {
    echo "<h1>Er is geen juiste naam ingevoerd</h1> <br>" .   $id;
}

$conn->close();
?>