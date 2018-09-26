#include <iostream>
#include <string>

using namespace std;

void main()
{
    string opcion;

    cout << "¿Eres mayor de edad?" << endl;
    cin >> opcion;

    if (opcion == "si" || opcion == "SI" || opcion == "Si")
    {
        cout << "Bienvenido, diviertase !!" << endl;
    }
    else if (opcion == "no" || opcion == "NO" || opcion == "No")
    {
        cout << "Lo siento, no puede pasar." << endl;
    }

    system("pause");
}