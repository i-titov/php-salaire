<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $salaire=$_POST['amount'];
    echo  "Votre salaire net est : " .calcule($salaire);
}
function calcule($salaire){
    return $salaire - ($salaire * 0.25);
}
