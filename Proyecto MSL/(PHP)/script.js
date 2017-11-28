function validar_texto(string)
{
    if(/[^a-zñA-ZÑ0-9\s]/.test(string))
    {
        alert("Solo se permiten letras");
    }
}