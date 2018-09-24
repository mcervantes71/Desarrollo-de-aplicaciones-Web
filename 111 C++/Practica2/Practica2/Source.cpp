#include <iostream>

using namespace std;

void main()
{
    int dia;

    cout << "1) Lunes\n2) Martes\n3) Miercoles\n4) Jueves\n5) Viernes\n6) Sabado\n7) Domingo" << endl;
    cin >> dia;

    if (dia == 1)
    {
        cout << "2x1 Pizzas" << endl;
    }
    else if (dia == 2)
    {
        cout << "2x1 Wendys" << endl;
    }
    else if (dia == 3)
    {
        cout << "2x1 Cine" << endl;
    }
    else if (dia == 4)
    {
        cout << "2x1 Margaritas" << endl;
    }
    else if (dia == 5)
    {
        cout << "Pockets" << endl;
    }
    else if (dia == 6)
    {
        cout << "Carne Asada" << endl;
    }
    else if (dia == 7)
    {
        cout << "Dia Familiar" << endl;
    }
    else
    {
        cout << "Error: opcion incorrecta" << endl;
    }

    system("pause");
}