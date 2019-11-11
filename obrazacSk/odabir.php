<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 11.11.2019.
 * Time: 13:53
 */ ?>
<html>
<head>

</head>
<body>
<form action="ispis.php" method="POST">

    <label for="ime" > Ime:</label>
    <input type="text" name="ime">
    <br><br>
    <label for="prez" >Prezime:</label>
    <input type="text" name="prezime"><br>
    <br>
    <label for="godina">Godina rođenja: </label>
    <input type="date" name="godina" >
    <br><br>
    <label for="skola">Zavrsena skola: </label><br>
    <input type="radio" name="skola" value="Gimnazija">Gimnazija<br>
    <input type="radio" name="skola" value="Strukovna">Strukovna<br>
    <br>
    <label for="adresa" maxlength="90">Adresa:</label>
    <input type="text" name="adresa">
    <br><br>
    <label for="spol">Spol: </label><br>
    <input type="radio" name="spol" value="Musko">Musko<br>
    <input type="radio" name="spol" value="Zensko">Zensko<br>
    <input type="radio" name="spol" value="Transeksualac">Transeksualac<br>
    <input type="radio" name="spol" value="Metroseksualac">Metroseksualac<br>
    <input type="radio" name="spol" value="Ostalo">Ostalo<br>
    <br>
    <label for="grad">Grad: </label>
    <select name="grad">
        <option value="Zagreb">Zagreb</option>
        <option value="Primosten">Primosten</option>
        <option value="Nasice">Nasice</option>
        <option value="Krapina">Krapina</option>
        <option value="Dubrovnik">Dubrovnik</option>
    </select>
    <br>
    <br>
    <label for="hobi">Hobi: </label><br>
    <select name="hobi[]" multiple="multiple">
        <option value="Pletenje">Pletenje</option>
        <option value="Gledanje filmova">Gledanje filmova</option>
        <option value="Skupljanje salveta">Skupljanje salveta</option>
        <option value="Citanje knjiga">Citanje knjiga</option>
        <option value="Sport">Sport</option>
    </select>
    <br><br>

    <label for="napomena">Napomena: </label><br>
    <textarea name="napomena"  rows="4" cols="50">

    </textarea>
    <br>
    <br>
    <button type="submit" name="salji" value="Posalji" onclick=""> Posalji </button>

</form>
</body>
</html>
