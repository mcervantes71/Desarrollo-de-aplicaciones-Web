class Prestamos:
    def __init__(self):
        self.NumPrestamo = 0
        self.NumCliente = 0
        self.FechaPrestamo = ''
        self.ImpPrestamo = 0
        self.Saldo = 0

    def RegistrarPrestamo(self):
        print('* * * Modulo para Registrar Prestamos * * *')
        self.NumPrestamo = int(input('Numero de Prestamo --> '))
        self.NumCliente = int(input('Numero de Cliente --> '))
        self.FechaPrestamo = input('Fecha de Prestamo --> ')
        self.ImpPrestamo = int(input('Importe del Prestamo --> '))
        self.Saldo = self.ImpPrestamo

    def MostrarDatos(self):
        print('* * * Datos del Prestamo * * *')
        print('Numero del Prestamo --> ', self.NumPrestamo)
        print('Numero de Cliente --> ', self.NumCliente)
        print('Fecha del Prestamo --> ', self.FechaPrestamo)
        print('Importe Prestamo --> ', self.ImpPrestamo)
        print('Saldo Actual --> ', self.Saldo)

class Pagos(Prestamos):
    def __init__(self):
        self.NumMovimiento = 0
        self.NumCliente = 0
        self.NumPrestamo = 0
        self.FechaPago = 0
        self.ImpPago = 0

    def RegistarPago(self):
        print('* * * Modulo para Registar Pagos * * *')
        self.NumMovimiento = int(input('Numero de Movimiento --> '))
        self.NumCliente = int(input('Numero de Cliente --> '))
        self.NumPrestamo = int(input('Numero de Prestamo --> '))
        self.FechaPago = input('Fecha de Pago --> ')
        self.ImpPago = int(input('Importe a Pagar --> '))

    def MostrarDatos(self):
        print('* * * Datos del Pago * * *')
        print('Numero de Movimiento --> ', self.NumMovimiento)
        print('Numero de Cliente --> ', self.NumCliente)
        print('Numero de Prestamo --> ', self.NumPrestamo)
        print('Fecha de Pago --> ', self.FechaPago)
        print('Importe Pago --> ', self.ImpPago)

class Clientes(Prestamos):
    def __init__(self):
        self.NumCliente = 0
        self.Nombre = ''
        self.Correo = ''
        self.Celular = ''

    def RegistarCliente(self):
        print('* * * Modulo para Registrar Clientes * * *')
        self.NumCliente = int(input('Numero del Cliente --> '))
        self.Nombre = input('Nombre Completo --> ')
        self.Correo = input('Correo Personal --> ')
        self.Celular = input('Numero de Celular --> ')

    def MostrarDatos(self):
        print('* * * Datos del Cliente * * *')
        print('Numero del Cliente --> ',self.NumCliente)
        print('Nombre Completo --> ',self.Nombre)
        print('Correo Personal --> ',self.Correo)
        print('Numero de Celular --> ', self.Celular)



Personal = Prestamos()
Vip = Clientes()
Mensual = Pagos()

Personal.Saldo = Personal.ImpPrestamo - Mensual.ImpPago

Vip.RegistarCliente()
Personal.RegistrarPrestamo()
Mensual.RegistarPago()
