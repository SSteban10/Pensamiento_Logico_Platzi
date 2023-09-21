// Declaramos el Array
let lista = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

// Declaramos la variable "MaxNumber" que inicia en 0
let MaxNumber = 0 

// Recorremos el array valor por valor con el ciclo for desde 0
for (let i = 0; i < lista.length; i++) {
  if (lista[i] > MaxNumber) {
    MaxNumber = lista[i]; // Actualizamos MaxNumber con el valor más grande
  }
}

// Imprime el resultado
console.log("Este es el número más grande: " + MaxNumber);
