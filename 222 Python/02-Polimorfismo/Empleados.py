class Empleados:
    def __init__(self):
        self.NumEmpleado = int(input('Numero de Empleado --> '))
        self.NombreEmpleado = input('Nombre del Empleado --> ')
        self.Sueldo = float(input('Sueldo --> '))

    def DatosEmpleado(self):
        print('Numero de Empleado --> ', self.NumEmpleado)
        print('Nombre del Empleado --> ', self.NombreEmpleado)
        print('Sueldo Diario --> ', self.Sueldo)

class Operadores(Empleados):
    def __init__(self):
        self.turno = input('Turno del Operador --> ')

    def DatosEmpleado(self):
        print('Turno del Operador --> ', self.turno)

class Supervisores(Empleados):
    def __init__(self):
        self.area =  input('Area del Supervisor --> ')

    def DatosEmpleado(self):
        print('Area a cargo del Supervisor --> ', self.area)


tipoEmpleado = 1

empleado = Empleados()
soldador =  Operadores()
calidad = Supervisores()

print('* * *   Recursos Humanos   * * *')
print('Selecione el Tipo de Empleado que va a Registrar')
print('1)Empleado General')
print('2)Operador')
print('3)Supervisor')

tipoEmpleado = int(input('Seleccione Tipo de Empleado --> '))

if tipoEmpleado == 1:
    print('Clase Empleados')
    empleado.DatosEmpleado()

elif tipoEmpleado == 2:
    print('Clase Operador')
    empleado.DatosEmpleado()

elif tipoEmpleado == 3:
    print('Clase Supervisor')
    empleado.DatosEmpleado()
