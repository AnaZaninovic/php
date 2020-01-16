<?php

function Ispisi(){

echo $a;
}
$GLOBALS["a"]=3;
Ispisi();
echo $a;

?>
