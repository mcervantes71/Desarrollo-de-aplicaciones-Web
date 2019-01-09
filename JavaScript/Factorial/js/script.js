function factorial(n)
{
    if (n % 1 == 0){
        if (n > 0)
            return n * factorial(n - 1);
        else
            return 1;
    }
    else {
        return -1;
    }
}

QUnit.test("Prueba funcion factorial", function(assert){
    assert.equal(factorial(5), 120, "Factorial de 5");
    assert.equal(factorial(6), 720, "Factorial de 6");
    assert.equal(factorial(7), 5040, "Factorial de 7");
    assert.equal(factorial(8), 40320, "Factorial de 8");
});
