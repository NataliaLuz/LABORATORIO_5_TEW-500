<?php 
//CONDICIONAL ANIDADO
$notaTEW_500 = 61;
if($notaTEW_500 > 60){
    echo "Aprobado";
}elseif($notaTEW_500 == 0){
    echo "Abandono";
}else{
    echo "Reprobado";
}
?>