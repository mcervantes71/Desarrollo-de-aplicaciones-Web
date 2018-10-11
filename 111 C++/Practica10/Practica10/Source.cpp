#include <iostream>

using namespace std;

void main()
{
    int tiempo;
    float sueldo, total, aumento;

    cout << "Cual es su sueldo mensual ??" << endl;
    cin >> sueldo;

    cout << "Cuantos años tiene trabajando para la empresa ??" << endl;
    cin >> tiempo;

    if (tiempo >= 10)
    {
        aumento = sueldo * 0.1;
    }
    else if(tiempo >= 5 && tiempo < 10)
    {
        aumento = sueldo * 0.07;
    }
    else if (tiempo >= 3 && tiempo < 5)
    {
        aumento = sueldo * 0.05;
    }
    else if (tiempo < 3)
    {
        aumento = sueldo * 0.03;
    }

    cout << "Aumento = " << aumento << endl;
    cout << "Nuevo Sueldo = " << sueldo + aumento << endl;

    system("pause");
}