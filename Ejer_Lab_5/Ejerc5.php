<?php
//Estructura Condicional
//ESCRIBA UN PROGRAMA PARA DETERMINAR SI EL PRODUCTO DE DOS NUMEROS ES NEGATIVO, POSITIVO O IGUAL A CERO.
$numeroA = 9;
$numeroB = 5;
$producto = $numeroA * $numeroB;
if($producto > 0){
    echo "$producto : Es positivo";
}elseif($producto == 0){
    echo "$producto : Es igual a cero";
}else{
    echo "$producto : Es negativo";
}
?>