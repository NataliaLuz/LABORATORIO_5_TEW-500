<?php  
//BUCLES WHILE
$estudiantes = array(
    "Boris Cristian",
    "Claudia Marisol",
    "Martin",
    "Jhessica",
    "Erika Amanda",
    "Joel",
    "Yola",
    "Juan Paul",
    "Rodrigo",
    "Luz Natalia",
    "Juan Ronaldo",
    "Rosse Mary",
    "Ever");
    $i = 0;
    while($i < count($estudiantes)){
        echo $estudiantes[$i]."<br>";
        $i = $i + 1;
    }
?>