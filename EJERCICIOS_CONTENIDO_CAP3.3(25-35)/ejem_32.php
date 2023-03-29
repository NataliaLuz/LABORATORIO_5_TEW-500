<?php 
//BUCLES FOREACH
$estudiantes = array(
    1=>"Boris Cristian",
    2=>"Claudia Marisol",
    3=>"Martin",
    4=>"Jhessica",
    5=>"Erika Amanda",
    6=>"Joel",
    7=>"Yola",
    8=>"Juan Paul",
    9=>"Rodrigo",
    10=>"Luz Natalia",
    11=>"Juan Ronaldo",
    12=>"Rosse Mary",
    13=>"Ever");
    foreach ($estudiantes as $key=> $value){
        echo $key . " - ". $value."<br>";
    }
?>