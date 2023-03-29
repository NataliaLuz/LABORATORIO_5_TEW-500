<?php
//Estructura Condicional multiple
//ESCRIBA UN PROGRAMA DONDE SE INTRODUZCA UN NUMERO DE 1 A 7, PARA MOSTRAR SU CORRESPONDIENTE
// DIA DE LA SEMANA, DEBE COMENZAR DESDE EL DOMINGO COMO PRIMER DIA.

$dia = 1;
switch ($dia){

    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Lunes";
        break;
    case 3:
        echo "Martes";
        break;
    case 4:
        echo "Miercoles";
        break;
    case 5:
        echo "Jueves";
        break;
    case 6:
        echo "Viernes";
        break; 
    case 7:
        echo "Sabado";
        break;  
    default:
        echo "Dia fuera de rango";
        break;                     
}
?>
