#include <iostream>

using namespace std;

void main()
{
    int num, limite, res;

    cout << "Dime un numero " << endl;
    cin >> num;

    cout << "Dime otro numero" << endl;
    cin >> limite;
    
    int i = 1;

    while(i <= limite)
    {
        res = num * i;
        cout << num << " x " << i << " = " << res << endl;

        i++;
    }

    system("pause");
}