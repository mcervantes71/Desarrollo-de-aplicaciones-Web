#include <iostream>

using namespace std;

float ang1, ang2, ang3, total;


void Triangulo_Lados()
{
    if (ang1 > 0 && ang2 > 0 && ang3 > 0)
    {
        if (ang1 == ang2 && ang1 == ang3)
        {
            cout << "Este es un triangulo Equilatero" << endl;
        }
        else if (ang1 != ang2 && ang1 != ang3 && ang2 != ang3)
        {
            cout << "Este es un triangulo Escaleno" << endl;
        }
        else if (ang1 == ang2 || ang1 == ang3 || ang2 == ang3)
        {
            cout << "Este es un triangulo Isosceles" << endl;
        }
    }
    else
    {
        cout << "Error" << endl;
    }
}

/*void Triangulo_Angulos()
{
    total = ang1 + ang2 + ang3;

    if (total == 180 && ang1 > 0 && ang2 > 0 && ang3 > 0)
    {
        if (ang1 == 90 || ang2 == 90 || ang3 == 90)
        {
            cout << "Este es un triangulo Rectangulo" << endl;
        }
        else if (ang1 < 90 && ang2 < 90 && ang3 < 90)
        {
            cout << "Este es un triangulo Acutangulo" << endl;
        }
        else if (ang1 > 90 || ang2 > 90 || ang3 > 90)
        {
            cout << "Este es un triangulo Obtusangulo" << endl;
        }
    }
    else
    {
        cout << "Error" << endl;
    }
}*/

void main()
{
    cout << "Cuanto mide el angulo 1??" << endl;
    cin >> ang1;

    cout << "Cuanto mide el angulo 2??" << endl;
    cin >> ang2;

    cout << "Cuanto mide el angulo 3??" << endl;
    cin >> ang3;

    //Triangulo_Angulos();
    Triangulo_Lados();

    system("pause");
}