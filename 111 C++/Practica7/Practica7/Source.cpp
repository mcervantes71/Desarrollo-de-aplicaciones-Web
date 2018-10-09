#include <iostream>

using namespace std;

void main()
{
    char resp;
    int num, res;

    cout << "Dime un numero" << endl;
    cin >> num;
    
    for (int i = 1; i <= 10; i++)
    {
        res = num * i;
        cout << num << " x " << i << " = " << res << endl;
    }

    cout << "Desea continuar ?? (s/n)" << endl;
    cin >> resp;

    system("pause");
}