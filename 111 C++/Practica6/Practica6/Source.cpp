#include <iostream>

using namespace std;

void main()
{
    float r1, r2, rt = 0;
    int op;

    cout << "Cuanto vale R1 ?? " << endl;
    cin >> r1;

    cout << "Cuanto vale R2 ?? " << endl;
    cin >> r2;

    cout << "1)Serie\n2)Parelelo" << endl;
    cin >> op;

    if (op == 1)
    {
        rt = r1 + r2;
    }
    else if (op == 2)
    {
        rt = r1 * r2 / (r1 + r2);
    }

    cout << "Rt = " << rt << endl;


    system("pause");
}
