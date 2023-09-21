#Suma, Resta, Multiplicación y Division

#Funcion para realizar suma
def RealizarSuma(a, b):
    resultado = a + b 
    print("El resultado de la suma es:", resultado )

#Funcion para realizar resta
def RealizarResta(a, b):
    resultado = a - b 
    print("El resultado de la resta es:", resultado )

#Funcion para realizar multiplicacion
def RealizarMultiplicacion(a, b):
    resultado = a * b
    print("El resultado de la multiplicacion es:", resultado)

def RealizarDivision(a, b):
    if b != 0:
        resultado = a / b 
        print ("El resultado de la division es:", resultado)
    else: 
        print ("No es posible dividir por cero")

#Llamamos las funciones con los valores que les dimos

RealizarSuma(4, 7)
RealizarResta(15, 9)
RealizarMultiplicacion(3, 7)
RealizarDivision(15, 3)
RealizarDivision(100, 0)
