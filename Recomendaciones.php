<?php
# Creamos los diferentes arrays para nuestra búsqueda
$Clima = array("Bogota" => "Frio", "Medellin" => "Templado", "Cartagena" => "Caliente"); 
$Ubicacion = array("La Guajira" => "Norte", "Leticia" => "Sur", "Cali" => "Occidente", "Cucuta" => "Oriente"); 
$Turismo = array("Santa Marta" => "Mar", "Villavicencio" => "Llano", "Santa Rosa de Cabal" => "Termales", "Riohacha" => "Desierto");

# Se solicita la preferencia del usuario para la primera elección
$PrimeraSeleccion = readline("¿En su viaje prefiere el clima, la ubicación o turismo?"); 

# Recibimos la primera preferencia y verificamos si es una opción válida
if ($PrimeraSeleccion == "clima" || $PrimeraSeleccion == "ubicacion" || $PrimeraSeleccion == "turismo") {
    # Usuario eligió una categoría válida
    # Ahora mostramos las opciones dentro de esa categoría
    switch ($PrimeraSeleccion) {
        case "clima":
            echo "Climas disponibles:\n";
            foreach($Clima as $ciudad => $clima){
                echo "$clima\n";
            }
            break;
        case "ubicacion":
            echo "Ubicaciones disponibles:\n";
            foreach($Ubicacion as $ciudad => $ubicacion) {
                echo "$ubicacion\n";
            }
            break;
        case "turismo":
            echo "Opciones de turismo disponibles:\n";
            foreach($Turismo as $ciudad => $turismo){
                echo "$turismo\n" ;
            }
            break;
    }
    
    # Se solicita al usuario que haga una segunda selección dentro de la categoría elegida
    $SegundaSeleccion = readline("Seleccione una opción dentro de la categoría elegida: ");
    
    # Verificamos si la segunda selección es válida y mostramos la información correspondiente
    switch ($PrimeraSeleccion) {
        case "clima":
            $ciudadesClima = array_keys($Clima, $SegundaSeleccion);
            if (!empty($ciudadesClima)) {
                echo "Las ciudades con clima $SegundaSeleccion son:\n";
                foreach ($ciudadesClima as $ciudad) {
                    echo "$ciudad\n";
                }
            } else {
                echo "No hay ciudades con clima $SegundaSeleccion en la lista.\n";
            }
            break;
        case "ubicacion":
            $ciudadesUbicacion = array_keys($Ubicacion, $SegundaSeleccion);
            if (!empty($ciudadesUbicacion)) {
                echo "Las ciudades en la ubicación $SegundaSeleccion son:\n";
                foreach ($ciudadesUbicacion as $ciudad) {
                    echo "$ciudad\n";
                }
            } else {
                echo "No hay ciudades en la ubicación $SegundaSeleccion en la lista.\n";
            }
            break;
        case "turismo":
            $ciudadesTurismo = array_keys($Turismo, $SegundaSeleccion);
            if (!empty($ciudadesTurismo)) {
                echo "Las ciudades con opciones de turismo $SegundaSeleccion son:\n";
                foreach ($ciudadesTurismo as $ciudad) {
                    echo "$ciudad\n";
                }
            } else {
                echo "No hay ciudades con opciones de turismo $SegundaSeleccion en la lista.\n";
            }
            break;
    }
} else {
    # Usuario ingresó una opción no válida en la primera selección
    echo "Por favor, introduzca una de las opciones 'clima', 'ubicacion' o 'turismo' en la primera selección.\n";
}
?>
