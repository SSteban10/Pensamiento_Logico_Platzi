<?php 
#Suma, Resta, Multiplicacion y Division

#Funcion para realizar suma 
function RealizarSuma($a, $b){
    $resultado = $a + $b; 
    echo "El resultado de la suma es: " . $resultado . "\n";
}

#Funcion para realizar resta
function RealizarResta($a, $b){
    $resultado = $a -$b;
    echo "El resultado de la suma es: " . $resultado . "\n";
}

#Funcion para realizar multiplicacion
function RealizarMultiplicacion($a, $b) {
    $resultado = $a * $b;
    echo "El resultado de la multiplicacion es:" . $resultado . "\n";
}

#Funcion para realizar la Division 
function RealizarDivision($a, $b){
   if ($b != 0) {
      $resultado = $a / $b;
      echo "El resultado de la division es:" . $resultado ."\n" ;
   } else { 
      echo "No es posible dividir por cero" ."\n"; 
   }
}

#llamamos las funcione con los valores que les dimos
RealizarSuma(614, 873); 
RealizarResta(6394, 113);
RealizarMultiplicacion(4, 27);
RealizarDivision(1234, 4); 
RealizarDivision(9876, 0);
?>
