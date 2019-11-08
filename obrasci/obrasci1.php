<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 8.11.2019.
 * Time: 12:23
 */

?>
<html>
<head>

</head>
<body>
<form action="/action_page.php" method="get">
    Ime: <input type="text" name="fname"><br>
    Prezime: <input type="text" name="lname"><br>
    <br>
    Idete li u skolu? <br>
    <input type="radio" name="sk" value="D"> Da<br>
    <input type="radio" name="sk" value="N"> Ne<br>
    <br>
    OIB:
    <input type="password" name="oib">
    <br>
    <br>
    Koje predmete volite?
    <select>
        <option value="a">-</option>
        <option value="b">Matematka</option>
        <option value="c">PI</option>
        <option value="d">PPJ</option>
    </select>
    <br>
    <br>
    Boja?
    <select>
        <option value="a2">-</option>
        <option value="b2">Zelena</option>
        <option value="c2">Narancasta</option>
        <option value="d2">Crvena</option>
    </select>
    <br>


    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>