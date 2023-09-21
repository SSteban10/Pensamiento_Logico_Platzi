//Suma, Resta, Multiplicacion y Division

// Función para realizar una suma
function realizarSuma(a, b) {
    resultado = a + b; 
    console.log("El resultado de la suma es: " + resultado);
}

// Función para realizar una multiplicación
function realizarMultiplicacion(a, b) {
    resultado = a * b; 
    console.log("El resultado de la multiplicación es: " + resultado);
}

// Función para realizar una resta
function realizarResta(a, b) {
    resultado = a - b; 
    console.log("El resultado de la resta es: " + resultado);
}

// Función para realizar una división
function realizarDivision(a, b) {
    if (b !== 0) {
        resultado = a / b;
        console.log("El resultado de la división es: " + resultado);
    } else {
        console.log("No es posible dividir por cero.");
    }
}

// Llamamos a las funciones con valores específicos
realizarSuma(5, 6);
realizarMultiplicacion(4, 8);
realizarResta(12, 3);
realizarDivision(20, 5);
realizarDivision(20,0);
