import abc
import sys
import os

class InvVentas(abc.ABC):
    def RegistrarVenta(self):
        pass

    def CalcularImporte(self):
        pass

    def ConsultarVenta(self):
        pass

class Ventas(InvVentas):
    def RegistrarVenta(self):
        self.NumVenta = int(input('Numero de Venta --> '))
        self.Producto = input('Nombre del Producto --> ')
        self.Precio = int(input('Precio --> '))
        self.Cantidad = int(input('Cantidad --> '))
        self.CalcularImporte()

    def CalcularImporte(self):
        self.Desc = 0
        self.Importe = self.Precio * self.Cantidad

        if self.Cantidad >= 150:
            self.Desc = self.Importe * 0.25
        elif self.Cantidad >= 100:
            self.Desc = self.Importe * 0.15
        elif self.Cantidad >= 50:
            self.Desc = self.Importe * 0.10

        self.ImporteTotal = self.Importe - self.Desc
        self.ConsultarVenta()

    def ConsultarVenta(self):
        print('Numero de Venta --> ', self.NumVenta)
        print('Producto --> ', self.Producto)
        print('Precio --> ', self.Precio)
        print('Cantidad --> ', self.Cantidad)
        print('Importe --> ', self.Importe)
        print('Descuento --> ', self.Desc)
        print('Importe Total --> ', self.ImporteTotal)

Abarrotes = Ventas()
Dulceria = Ventas()
Verdaduras = Ventas()

seleccion = 1

while seleccion != 4:

    print('Seleccione una opcion:')
    print('[ 1 ] Abarrotes')
    print('[ 2 ] Dulceria')
    print('[ 3 ] Verduras')
    print('[ 4 ] Salir')

    seleccion = int(input('Que opcion desea ?? '))

    if seleccion == 1:
        Abarrotes.RegistrarVenta()
    elif seleccion == 2:
        Dulceria.RegistrarVenta()
    elif seleccion == 3:
        Verdaduras.RegistrarVenta()
    elif seleccion == 4:
        sys.exit()
