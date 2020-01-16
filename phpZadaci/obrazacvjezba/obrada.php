<?php
$datoteka=fopen("datoteka.txt", "a");

$ime=$_GET["ime"];
echo "Ime: " . $ime;
echo "<br>";
fwrite($datoteka, "Ime: " . $ime . "\r\n");

$prezime=$_GET["prezime"];
echo "Prezime: " . $prezime . "<br>";
fwrite($datoteka, "Prezime: " . $prezime . "\r\n");

if(isset($_POST["mail"]))$mail = $_POST["mail"];
if(preg_match("/(\w){1,5}[0-9]{1,5}@yahoo.com/",$mail))echo "email: ". $mail." je validno upisan" ; else{echo "nije";};
$prezime=$_GET["mail"];
echo "Mail: " . $mail . "<br>";
fwrite($datoteka, "Mail: " . mail . "\r\n");
 ?>
