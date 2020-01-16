<?php

/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 25.10.2019.
 * Time: 11:54
 */

$niz=array(1,2,3,4,5,6,7,8,9,10);
$c=1;
$zbroj=0;
foreach($niz as $djeljiv)
{
    if($djeljiv%2==0){
        echo "A[" . $c . "]=" . $djeljiv;
        echo "<br>";
        $zbroj+=$djeljiv;
    }
    $c++;
}
echo "Neki tekst";
echo "<br>"

echo "Zbroj: " . $zbroj;
?>
