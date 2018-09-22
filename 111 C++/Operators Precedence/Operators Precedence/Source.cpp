#include <iostream>
#include <string>

using namespace std;

void main()
{
    int a = 4;
    int b = 0;
    float pi = 3.1416f;
    char chr = '5';
    string str = "Hola";

    cout << "a + b   -> " << a + b << endl;
    cout << "a + pi  -> " << a + pi << endl;
    cout << "b + a   -> " << b + a << endl;
    cout << "pi + b  -> " << pi + b << endl;

    cout << "pi > a  -> " << (pi > a) << endl;
    cout << "pi < a  -> " << (pi < a) << endl;
    cout << "pi <= b -> " << (pi <= b) << endl;
    cout << "b >= pi -> " << (b >= pi) << endl;

    cout << "s + c   -> " << str + chr << endl;
    cout << "c + s   -> " << chr + str << endl;
    //cout << "s + a  ->  " << s + a << endl;
    //cout << "s + pi  ->  " << s + pi << endl;
    cout << "a + c   -> " << a + chr << endl;
    cout << "pi + c  -> " << pi + chr << endl;
    //cout << "pi > s  ->  " << (pi > s) << endl;
    //cout << "s > a  ->  " << (s > a) << endl;
    cout << "b <= c  -> " << (b <= chr) << endl;

    cout << "\n* * * * * * * * * * * * * *\n" << endl;

    cout << 5 + 3 * a + chr % 2 + 9 / 2 + (4 + 2) << endl;

    cout << pi + a * (b * pi) + 50 - a / 2 + (pi * 3) << endl;

    cout << a + (a + a) + pi * (a + a) - (a + b + (a + pi)) << endl;

    cout << "\n* * * * * * * * * * * * * *\n" << endl;

    a = 10;
    b = 12;
    int c = 13;
    int d = 10;

    cout << (((a > b) || (a < c)) && ((a == c) || (a >= b))) << endl;

    cout << (((a >= b) || (a < d)) && ((a >= d) && (c > d))) << endl;

    cout << (!(a == c) && (c > b)) << endl;

    cout << "\n* * * * * * * * * * * * * *\n" << endl;

    int i = 7;
    chr = 'w';
    float f = 5.5f;

    cout << ((i >= 6) && (chr == 'w')) << endl;
    cout << ((i >= 6) || (chr == 119)) << endl;
    cout << ((f < 11) && (i > 100)) << endl;
    cout << ((chr != 'p') || ((i + f) <= 10)) << endl;
    cout << ((i >= 6) || (chr == 65)) << endl;

    system("pause");
}
