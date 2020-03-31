<?php
$veza = new mysqli('localhost', 'root', '', 'anazaninovic');
if($veza === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($result = mysqli_query($veza, "SELECT * FROM recepcija")){
  if(mysqli_num_rows($result) > 0){
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>ImeGosta</th>";
    echo "<th>CijenaSobe</th>";
    echo "<th>ObavezanDoručak</th>";
    echo "</tr>";
  }
}
while($row = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['ImeGosta'] . "</td>";
  echo "<td>" . $row['CijenaSobe'] . "</td>";
  echo "<td>" . $row['ObavezanDoručak'] . "</td>";
  echo "<tr>";
}
echo "</table>";
mysqli_free_result($result);
?>
