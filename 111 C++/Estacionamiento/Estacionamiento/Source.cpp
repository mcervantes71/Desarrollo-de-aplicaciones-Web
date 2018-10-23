#include <iostream>

using namespace std;

int op, cupo = 0, tiempo, dia, cuota, total;

void Calcular()
{
    total = 0;

    cout << "Que dia es ?? 1) L-M-M  2) J-V  3) S-D" << endl;
    cin >> dia;

    cout << "Introduzca el tiempo en minutos" << endl;
    cin >> tiempo;

    if (dia == 1)
        cuota = 5;
    else if (dia == 2)
        cuota = 8;
    else if (dia == 3)
        cuota = 10;

    if (tiempo % 60 >= 15)
        total = cuota;

    total += (int)(tiempo / 60) * cuota;

    cout << "Total = " << total << endl;
}

void main()
{
    do {
        cout << "1)Entrada 2)Salida" << endl;
        cin >> op;

        if (op == 1 && cupo < 10)
        {
            cout << "Puede pasar" << endl;
            cupo++;
        }
        else if (op == 1 && cupo == 10)
            cout << "No hay espacios libre" << endl;
        else if (op == 2 && cupo == 0)
            cout << "Error" << endl;
        else if (op == 2 && cupo > 0)
        {
            Calcular();
            cupo--;
        }

        cout << "Desea terminar el programa 1)Continuar 2)Salir" << endl;
        cin >> op;

    } while (op == 1);
    
    system("pause");
}