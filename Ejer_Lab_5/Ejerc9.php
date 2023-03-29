<?php
//Estructura Condicional
//ESCRIBA UN PROGRAMA PARA LAS NOTAS DE TRES PARCIALES, DONDE REALICE LA SUMA,
//EL PROMEDIO Y VERIFICAR SI APROBO O REPROBO.
// LA NOTA DE APROBACION ES 51.
$nota1 = 58;
$nota2 = 58;
$nota3 = 58;

$promedio = ($nota1 + $nota2 + $nota3)/3;
if($promedio){
    echo "Aprobo";
}else{
    echo "Reprobo";
}
?>