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
<form action="obrazac.php" method="POST">

    <label for="ime" > Ime:</label>
    <input type="text" name="prez"><br>

    <label for="prez" >Prezime:</label>
    <input type="text" name="ime"><br>
    <br>

    <label for="skola">Idete li u skolu?</label>
    <br>
    <input type="radio" name="skola" value="D"> Da<br>
    <input type="radio" name="skola" value="N"> Ne<br>
    <br>

    <label for="oib">OIB:</label>
    <input type="password" name="oib">
    <br>
    <br>

    <label for="predmet">Koji su vam predmeti najdrazi?</label>
    <br>
    <select name="predmet[]" multiple="multiple">
        <option value="Matematika">Matematika</option>
        <option value="Fizika">Fizika</option>
        <option value="Engleski">Engleski</option>
        <option value="PI">Programiranje za internet</option>
    </select>
    <br>
    <br>

    <label for="boja">Koji vam je boja najdraza?</label>
    <select name="boja">
        <option value="plava">Plava</option>
        <option value="zelena">Zelena</option>
        <option value="narancasta">Narancasta</option>
        <option value="crvena">Crvena</option>
    </select>
    <br>
    <br>
    <button type="submit" name="salji" value="Posalji" onclick=""> Posalji </button>

</form>
</body>
</html>