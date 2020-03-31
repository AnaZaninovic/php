<?php
  $veza = mysqli_connect("localhost", "root","", "anazaninovic");
  if($veza === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  else{
    echo "Uspjesno povezano" . "<br>" . "<br>" ;
  }

echo "Tablica Recepcija:" . "<br>";
  $sql= "SELECT * FROM recepcija";
  $result = $veza->query($sql);
  while ($row = $result->fetch_assoc()) {
    echo "ID recepcije: " . $row["ID"]. " - Ime Gosta: " . $row["ImeGosta"]. " - CijenaSobe: " .$row["CijenaSobe"] . " - Doručak: " . $row["ObavezanDoručak"] . "<br>";
 }
echo "<br>";

 echo "Tablica Sobe:" . "<br>";
  $sql= "SELECT * FROM sobe";
  $result = $veza->query($sql);
  while ($row = $result->fetch_assoc()) {
    echo "ID Sobe: " . $row["IDsobe"]. " - ID Recepcije: " . $row["RecepcijaID"]. " - Posteljina: " .$row["Posteljina"] . "<br>";
  }

  $veza->close();
?>
