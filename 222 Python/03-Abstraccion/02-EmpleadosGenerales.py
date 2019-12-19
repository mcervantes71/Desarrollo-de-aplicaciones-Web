from abc import ABC
import os

class EmpleadosGenerales(ABC):
    def DatosEmpledos(self):
        pass

class Operadores(EmpleadosGenerales):
    def __init__(self):
        self.numEmpleado = input('Numero de Empleado --> ')
        self.nombreEmpleado = input('Nombre --> ')
        self.sueldo = float(input('Sueldo --> '))
        self.turno = input('Turno --> ')

    def DatosEmpleados(self):
        print('numEmpleado --> ', self.numEmpleado)
        print('nombreEmpleado --> ', self.nombreEmpleado)
        print('sueldo --> ', self.sueldo)
        print('turno --> ', self.turno)

class Supervisores(EmpleadosGenerales):
    def __init__(self):
        self.numEmpleado = input('Numero de Empleado --> ')
        self.nombreEmpleado = input('Nombre --> ')
        self.sueldo = float(input('Sueldo --> '))
        self.turno = input('Turno --> ')
        self.areas = input('Area del Supervisor --> ')

    def DatosEmpleados(self):
        print('numEmpleado --> ', self.numEmpleado)
        print('nombreEmpleado --> ', self.nombreEmpleado)
        print('sueldo --> ', self.sueldo)
        print('turno --> ', self.turno)
        print('area --> ', self.area)


opcion = 's'

while opcion == 's':
    op = 0

    os.system('clear')
    print('* * *   Crear Usario   * * *')
    print('1) Operador')
    print('2) Supervisor')
    op = int(input('Que tipo de usuario desea crear ?? '))

    os.system('clear')
    if op == 1:
        print('Clase Operadores')
        Cortador = Operadores()
        Cortador.DatosEmpledos()
    elif op == 2:
        print('Clase Supervisores')
        Sup = Supervisores()
        Sup.DatosEmpledos()

    os.system('clear')
    opcion = input('Desea continuar ?? (s/n) ')

os.system('clear')
print('* * * * * * * * * * * * * * * * * * * * * * * *')
print('* * *   F i n   d e l   P r o g r a m a   * * *')
print('* * * * * * * * * * * * * * * * * * * * * * * *')
