<?php

echo "<br>Ime: " . $_POST['ime'] . "<br>";

echo "Prezime: " . $_POST["prez"] . "<br><br>";

echo "OIB: " . $_POST["oib"] . "<br><br>";

if ($_POST["skola"] == "D") {
    echo "Idete u skolu." . "<br>";
} else {
    echo "Ne idete u skolu." . "<br>";
}

echo "<br>";

echo "Najdrazi predmeti: <br>";
foreach ($_POST["predmet"] as $selectedOption)
    echo $selectedOption . "<br>";

echo "<br>";

echo "Najdraza boja: " . $_POST["boja"] . "<br>";

?>
