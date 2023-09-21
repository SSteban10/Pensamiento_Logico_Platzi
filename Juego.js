const readline = require('readline');

// Función para obtener la elección del usuario
async function obtenerEleccionUsuario() {
  const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
  });

  return new Promise((resolve) => {
    rl.question(
      'Elige tu ataque:\n1 para piedra\n2 para papel\n3 para tijera\n',
      (eleccion) => {
        rl.close();
        resolve(eleccion);
      }
    );
  });
}

// Función para obtener la elección de la máquina
function obtenerEleccionMaquina() {
  const opciones = ['piedra', 'papel', 'tijera'];
  const indice = Math.floor(Math.random() * 3);
  return opciones[indice];
}

// Función para determinar el resultado del juego
function determinarResultado(eleccionUsuario, eleccionMaquina) {
  if (eleccionUsuario === eleccionMaquina) {
    return 'Empate';
  } else if (
    (eleccionUsuario === '1' && eleccionMaquina === 'tijera') ||
    (eleccionUsuario === '2' && eleccionMaquina === 'piedra') ||
    (eleccionUsuario === '3' && eleccionMaquina === 'papel')
  ) {
    return 'Ganaste';
  } else {
    return 'Perdiste';
  }
}

// Función principal del juego
async function jugarPiedraPapelTijera() {
  console.log('Inicia el juego:');

  const eleccionUsuario = await obtenerEleccionUsuario();

  // Validación más completa para aceptar diferentes formatos de entrada
  if (['1', '2', '3', 'piedra', 'papel', 'tijera'].includes(eleccionUsuario)) {
    console.log(`Elegiste ${
      eleccionUsuario === '1' || eleccionUsuario === 'piedra' ? 'piedra' :
      eleccionUsuario === '2' || eleccionUsuario === 'papel' ? 'papel' :
      'tijera'
    }.`);

    const eleccionMaquina = obtenerEleccionMaquina();
    console.log(`La máquina eligió ${eleccionMaquina}.`);

    const resultado = determinarResultado(eleccionUsuario, eleccionMaquina);
    console.log(`Resultado: ${resultado}`);
  } else {
    console.log('La opción que elegiste no es válida, vuelve a intentarlo.');
  }
}

// Llama a la función principal para iniciar el juego
jugarPiedraPapelTijera();
