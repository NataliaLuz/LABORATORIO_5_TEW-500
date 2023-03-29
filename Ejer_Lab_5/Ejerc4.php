<?php
//Estructura Condicional
//ESCRIBA UN PROGRAMA QUE DETERMINAR SI EL PRIMER DIGITO DE UN NUMERO ES IGUAL AL ULTIMO DIGITO
//DEL MISMO NUMERO. CONCIDERE NUMERO DE 4 DIGITOS
$numero = 5695;
$digitoU = $numero % 10;
$digitoP = intdiv($numero,1000);
if($digitoP == $digitoU){
    echo "Los digitos son Iguales";
}else{
    echo "Los digitos son desiguales";
}
?>