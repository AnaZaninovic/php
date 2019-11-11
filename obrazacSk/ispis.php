<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 11.11.2019.
 * Time: 14:09
 */
echo "<br>Ime: " . $_POST["ime"] . "<br>";
echo "<br>";

echo "Prezime: " . $_POST["prezime"] . "<br>";
echo "<br>";

echo "Godina rođenja: " . $_POST["godina"] . "<br>";
echo "<br>";

echo "Şkola: " ;
if ($_POST["skola"] == "Gimnazija") {
    echo "Gimnazija" . "<br>";
} else {
    echo "Strukovna" . "<br>";
}
echo "<br>";

echo "<br>Adresa: " . $_POST["adresa"] . "<br>";
echo "<br>";

echo "Spol: " . $_POST["spol"] . "<br>";
echo "<br>";

echo "Grad: " . $_POST["grad"] . "<br>";
echo "<br>";

echo "Hobi: <br>";
foreach ($_POST["hobi"] as $selectedOption)
    echo $selectedOption . "<br>";
echo "<br>";

echo "Napomena: " . $_POST["napomena"] . "<br>";
echo "<br>";

if (count($_POST["hobi"])==3 && $_POST["skola"]=="Gimnazija"){
    echo "Super!";
}
if (count($_POST["hobi"])==2 && $_POST["skola"]=="Strukovna"){
    echo "Bravo!!!!" ;
}


?>
