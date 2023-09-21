<?php

#Creamos los diferentes arrays para nuestra busqueda
$Clima = array("Bogota" => "Frio", "Medellin" => "Templado", "Cartagena" => "Caliente"); 
$Ubicacion = array("La guajira" => "Norte", "Leticia" => "Sur", "Cali" => "Occidente", "Cucuta" => "Oriente"); 
$Turismo = array("Santa Marta" => "Mar", "Villavicencio" => "Llano", "Santa rosa de cabal" => "Termales", "Riohacha" => "Desierto");

#Se solicita la preferencia del usuario 
$Interes = readline("¿En su viaje prefiere el clima, la ubicacion o turismo?"); 

# Recibimos la preferencia y ahora buscamos de acuerdo a la solicitud
switch ($Interes) {
    case "clima":
        echo "Informacion sobre el clima:\n";
        foreach($Clima as $ciudad => $clima){
            echo "$ciudad: $clima\n";
        }
        break;
    case "ubicacion":
        echo "Informacion sobre la ubicacion";
        foreach($Ubicacion as $ciudad => $ubicacion) {
            echo "$ciudad: $ubicacion\n";
        }
        break;
    case "turismo":
        echo "Informacion sobre el turismo";
        foreach($Turismo as $ciudad => $turismo){
            echo "$ciudad: $turismo\n" ;
        }
        break;
    default:
        echo " Por favor instroduzca una de las opciones 'Clima', 'Ubicacion' o 'Turismo', ya que esta opcion no es valida \n";
}