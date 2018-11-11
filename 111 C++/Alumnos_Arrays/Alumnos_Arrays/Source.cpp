#include <iostream>

using namespace std;

void main()
{
	int calif[5];
	float prom = 0;

	for (int i = 0; i < 5; i++)
	{
		cout << "Cual es la calificacion " << i + 1 << endl;
		cin >> calif[i];
		prom += calif[i];
	}
	
	prom /= 5;
	
	cout << "El promedio es " << prom << endl;

	system("pause");
}