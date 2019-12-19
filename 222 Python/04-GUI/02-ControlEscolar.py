from tkinter import *
from tkinter import messagebox as mb

class FormPrincipal():
    def __init__(self):
        self.root = Tk()
        self.root.resizable(False, False)
        self.root.geometry('300x250+600+50')
        self.root.title('Control Escolar')

        self.menubarra = Menu(self.root)
        file = Menu(self.menubarra, tearoff = 0)
        self.menubarra.add_cascade(label = "Alumnos", menu = file)
        file.add_command(label = "Registar Alumnos", command = self.AbrirFormRegAlumnos)
        file.add_command(label = "Consultar Alumnos", command = self.AbrirFormConAlumnos)
        file.add_separator()
        file.add_command(label = "Cerrar Aplicacion", command = self.root.quit)
        self.root.config(menu = self.menubarra)
        self.root.mainloop()

    def AbrirFormRegAlumnos(self):
        alumno = Alumnos().getInstance()
        alumno.FormAlumnos.state(newstate = "normal")

    def AbrirFormConAlumnos(self):
        buscar = Consultar().getInstance()
        buscar.FormConsultar.state(newstate = "normal")

class Alumnos():
    _instance_ = None

    def getInstance(self):
        if Alumnos._instance_ == None:
            Alumnos()

        return Alumnos._instance_

    def __init__(self):
        if Alumnos._instance_ != None:
            Exception('El patron Singleton esta en proceso')
        else:
            self.FormAlumnos = Tk()
            self.FormAlumnos.geometry('350x300+600+100')
            self.FormAlumnos.resizable(False, False)
            self.FormAlumnos.title('Registro de Alumnos')

            Label(self.FormAlumnos, text = 'Matricula del alumno').place(x = 10, y = 10)
            Label(self.FormAlumnos, text = 'Nombre').place(x = 10, y = 40)
            Label(self.FormAlumnos, text = 'Apellido Paterno').place(x = 10, y = 70)
            Label(self.FormAlumnos, text = 'Apellido Materno').place(x = 10, y = 100)
            Label(self.FormAlumnos, text = 'Grupo').place(x = 10, y = 130)

            self.txtMatricula = Entry(self.FormAlumnos)
            self.txtMatricula.place(x = 160, y = 10)
            self.txtNombre = Entry(self.FormAlumnos)
            self.txtNombre.place(x = 160, y = 40)
            self.txtAP = Entry(self.FormAlumnos)
            self.txtAP.place(x = 160, y = 70)
            self.txtAM = Entry(self.FormAlumnos)
            self.txtAM.place(x = 160, y = 100)
            self.txtGrupo = Entry(self.FormAlumnos)
            self.txtGrupo.place(x = 160, y = 130)

            Button(self.FormAlumnos, text = 'Regresar', command = self.FormAlumnos.withdraw, width = 15).place(x = 20, y = 200)
            Button(self.FormAlumnos, text = 'Guardar', command = self.GuardarDatos, width = 15).place(x = 180, y = 200)

    def GuardarDatos(self):
        pass

FormPrincipal()
