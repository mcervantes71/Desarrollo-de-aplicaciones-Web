#include <iostream>

using namespace std;

void main()
{
    float calif;

    cout << "Cual fue tu calificacion?" << endl;
    cin >> calif;

    if (calif == 100 || calif == 10)
    {
        cout << "Tu calificacion fue una A" << endl;
    }
    else if (calif < 100 && calif >= 90 || calif < 10 && calif >= 9)
    {
        cout << "Tu calificacion fue una B" << endl;
    }
    else if (calif < 90 && calif >= 80 || calif < 9 && calif >= 8)
    {
        cout << "Tu calificacion fue una C" << endl;
    }
    else if (calif < 80 && calif >= 70 || calif < 9 && calif >= 7)
    {
        cout << "Tu calificacion fue una D" << endl;
    }
    else if (calif < 70 && calif >= 60 || calif < 7 && calif >= 6)
    {
        cout << "Tu calificacion fue una E" << endl;
    }
    else if (calif < 60 || calif < 6)
    {
        cout << "Tu calificacion fue una F" << endl;
    }

    system("pause");
}