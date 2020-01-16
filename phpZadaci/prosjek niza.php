<?php

/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 25.10.2019.
 * Time: 11:54
 */

$niz=array(1,2,3,4,5,3,4,2,1,1);
$c=1;
$zbroj=0;
$broj=0;
foreach($niz as $djeljiv)
{
    if($djeljiv%2==0){
        echo "A[" . $c . "]=" . $djeljiv;
        echo "<br>";
        $broj+=1;
        $zbroj+=$djeljiv;
    }
    $c++;
}
echo "Broj parnih indeksa: " . $broj . "<br>";
echo "Njihov zbroj: " . $zbroj;
?>
