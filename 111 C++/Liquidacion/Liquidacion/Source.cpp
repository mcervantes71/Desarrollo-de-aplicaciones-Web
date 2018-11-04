#include <iostream>

using namespace std;

void Proporcional_Aguinaldo()
{
    float dias_laborados, dias_aguinaldo = 30, salario_diario, aguinaldo = 0;

    cout << "Cuantos fueron los dias laborados ??" << endl;
    cin >> dias_laborados;

    cout << "Cual es tu salario diario ??" << endl;
    cin >> salario_diario;

    aguinaldo = dias_aguinaldo / 365 * dias_laborados * salario_diario;

    cout << "Tu proporcional de aguinaldo es " << aguinaldo << endl;
}

void main()
{
    Proporcional_Aguinaldo();

    system("pause");
}
