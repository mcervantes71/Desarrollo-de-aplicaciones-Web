#include <iostream>

using namespace std;

void main()
{
    int num, res = 0;

    cout << "Dime un numero" << endl;
    cin >> num;

    for (int i = 1; i <= 10; i++)
    {
        res = num * i;
        cout << num << " x " << i << " = " << res << endl;
    }

    system("pause");
}