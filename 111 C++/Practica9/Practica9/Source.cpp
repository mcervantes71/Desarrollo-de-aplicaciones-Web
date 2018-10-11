#include <iostream>

using namespace std;

void main()
{
    float peso, estatura, imc = 0;

    cout << "Cual es su peso en Kg" << endl;
    cin >> peso;

    cout << "Cual es su estatura en m" << endl;
    cin >> estatura;

    imc = peso / (estatura * estatura);

    cout << "Su IMC es " << imc << endl;

    if (imc < 20)
    {
        cout << "usted tiene Bajo Peso" << endl;
    }
    else if (imc >= 20 && imc < 25)
    {
        cout << "usted tiene Peso Normal" << endl;
    }
    else if (imc >= 25 && imc < 30)
    {
        cout << "usted tiene SobrePeso" << endl;
    }
    else if (imc >= 30 && imc < 35)
    {
        cout << "usted tiene Primer Grado de Obesidad" << endl;
    }
    else if (imc >= 35 && imc < 40)
    {
        cout << "usted tiene Segundo Grado de Obesidad" << endl;
    }
    else if (imc >= 40)
    {
        cout << "usted tiene Tercer Grado de Obesidad" << endl;
    }

    system("pause");
}
