<?php 

function addierer ($eingabe){
    $eingabe=$eingabe+1;
    echo $eingabe;
}

function lieblingsFunktion( $zahl ){
return $zahl = $zahl + 10;
}

function farbanpassung($ganzzahl_eingabe){
switch ($ganzzahl_eingabe){

case $ganzzahl_eingabe%3==0:

    echo "<span style='color: green;'>$ganzzahl_eingabe</span>";
    break;
case $ganzzahl_eingabe%3==1:

    echo "<span style='color: red;'>$ganzzahl_eingabe</span>";
    break;
case $ganzzahl_eingabe%3==2:

    echo "<span style='color: blau;'>$ganzzahl_eingabe</span>";
    break;
}
}

// $x=lieblingsFunktion( 6 );
// echo $x;

?>