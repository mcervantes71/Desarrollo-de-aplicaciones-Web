#include <iostream>

using namespace std;

void main()
{
    int factor, limite, res;

    cout << "Dime un numero " << endl;
    cin >> factor;

    cout << "Dime otro numero" << endl;
    cin >> limite;
    
    for (int i = 1; i <= limite; i++)
    {
        res = factor * i;
        cout << factor << " x " << i << " = " << res << endl;
    }

    system("pause");
}