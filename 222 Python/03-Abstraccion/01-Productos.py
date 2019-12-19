from abc import ABC

class Productos(ABC):
    def Datos(self):
        pass

class Electronica(Productos):
    def Datos(self):
        print('Estos son los Datos de un Producto de Electronica')
        self.numSerie = '1233'
        print('Numero de Serie -->', self.numSerie)

class Zapateria(Productos):
    def Datos(self):
        print('Datos del Departamento de Zapateria')
        self.Marca = input('Marca --> ')
        self.Talla = input('Talla --> ')
        print('Marca --> ', self.Marca, ' Talla --> ', self.Talla)

class Ropa(Productos):
    def Datos(self):
        print('Datos del Area de Ropa')
        self.Origen = input('Origen --> ')
        print('Origen de la Prenda --> ', self.Origen)

Television =  Electronica()
Television.Datos()

Tenis = Zapateria()
Tenis.Datos()

Traje = Ropa()
Traje.Datos()
