<?php

//RIFA
$rifa = false;
$numerosSorteados = 100;
$numeroComprado= rand(0,100);
echo "numero da sorte: $numeroComprado <br>";
while($rifa == false){
    if ( $numerosSorteados == $numeroComprado) {
        echo "BATE! -";
        $rifa = true;
    } else {
        echo "Ainda não $numerosSorteados -";
    }

    $numerosSorteados--;
}
echo "<br><br>";

$ganhador = false;
$numerosSorteados = 100;
$numeroComprado= rand(0,100);
echo "numero da sorte: $numeroComprado <br>";
while(!$ganhador);