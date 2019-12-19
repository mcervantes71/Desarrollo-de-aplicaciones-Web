from tkinter import *
from tkinter import messagebox
from cgitb import text
from distutils import command

def RegistrarVenta():
    if tipoPizza.get()==1:
        precio=79.00
    elif tipoPizza.get()==2:
        precio=99.00
    elif tipoPizza.get()==3:
        precio=149.00

    messagebox.showinfo("Precio", "Esta pizza cuesta " + str(precio))

    cantidad = cant.get()
    importe = precio * cantidad

    messagebox.showinfo ("Importe a pagar ", "Total a pagar " + str (Importe))

formPizza = Tk()
tipoPizza = IntVar()
cant = IntVar()

lblTipoPizza = Label (formPizza, text = "Selecciona un tipo de pizza ").place(x = 20, y = 20)
pizzaInd = Radiobutton (formPizza, text = "Pepperoni ", value = 1, variable = tipoPizza).place(x = 20, y = 40)
lblTipoPizza = Radiobutton (formPizza, text = "Cuatro ingredientes ", value = 2, variable = tipoPizza).place(x = 20, y = 60)
lblTipoPizza = Radiobutton (formPizza, text = "Cuatro super cheese cu4tro", value = 3, variable = tipoPizza).place(x = 20, y = 80)
lblCantidad = Label (formPizza, text = "Cantidad a comprar: ").place (x = 20, y = 120)
txbCantidad = Entry(formPizza, textvariable = cant).place (x = 160, y = 120)
btnVenta = Button (formPizza, text = "Registrar Venta", command = RegistrarVenta).place (x = 220, y = 180)

formPizza.mainloop()
