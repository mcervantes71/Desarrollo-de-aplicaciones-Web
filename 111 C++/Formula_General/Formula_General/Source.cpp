#include <iostream>
#include <math.h>

using namespace std;

void Formula_General(int a, int b, int c)
{
	float x1 = 0, x2 = 0;

	x1 = (-b + sqrt(pow(b, 2) - 4 * a * c)) / (2 * a);

	x2 = (-b - sqrt(pow(b, 2) - 4 * a * c)) / (2 * a);

	cout << "x1 = " << x1 << " y x2 = " << x2 << endl;
}

void main()
{
	/*int a, b, c;

	cout << "Cual es el valor de a ??" << endl;
	cin >> a;
	cout << "Cual es el valor de b ??" << endl;
	cin >> b;
	cout << "Cual es el valor de c ??" << endl;
	cin >> c;*/

	int  valores[10][3];
	
	for(int i = 0; i < 10; i++)
	{
		valores[i][0] = 2;
		valores[i][1] = 4;
		valores[i][2] = -16;
	}

	for (int i = 0; i < 10; i++)
	{
		Formula_General(valores[i][0], valores[i][1], valores[i][2]);
	}

	system("pause");
}