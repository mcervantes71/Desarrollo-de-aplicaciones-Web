#include <iostream>

using namespace std;

void main()
{
    //codigo fuente
    float num1;
    float num2;
    float res;
    int op;

    cout << "Dime un numero" << endl;
    cin >> num1;

    cout << "Dime otro numero" << endl;
    cin >> num2;

    cout << "1) Suma\n2)Resta\n3)Multiplicacion\n4)Division" << endl;
    cin >> op;

    if (op == 1)
    {
        res = num1 + num2;
        cout << num1 << " + " << num2 << " = " << res << endl;
    }
    else if (op == 2)
    {
        res = num1 - num2;
        cout << num1 << " - " << num2 << " = " << res << endl;
    }
    else if (op == 3)
    {
        res = num1 * num2;
        cout << num1 << " x " << num2 << " = " << res << endl;
    }
    else if (op == 4)
    {
        res = num1 / num2;
        cout << num1 << " / " << num2 << " = " << res << endl;
    }
    else
    {
        cout << "Opcion incorrecta" << endl;
    }


    system("pause");
}