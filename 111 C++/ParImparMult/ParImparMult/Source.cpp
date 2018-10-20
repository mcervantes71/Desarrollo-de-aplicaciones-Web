#include <iostream>
#include <string>

using namespace std;

int num, res;

string ParImpar()
{
    if (num % 2 == 0)
        return "Es Par";
    else
        return "Es Impar";
}

void Mult()
{
    for (int i = 1; i <= 10; i++)
    {
        res = num * i;
        cout << num << " x " << i << " = " << res << endl;
    }
}

void main()
{
    string respuesta;

    cout << "Dime un numero" << endl;
    cin >> num;

    respuesta = ParImpar();

    if (respuesta == "Es Par")
        Mult();
    else
        cout << respuesta << endl;

    system("pause");
}