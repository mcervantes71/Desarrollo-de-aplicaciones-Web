var biblioteca = [
    {
        titulo: "JavaScript en el Lado del Cliente",
        editorial: "Editorial Programacion en el Red",
        autor:{
            nombreCompleto: "Javier Perez Alvarez",
            fechaNacimiento: "01/01/1970",
            nacionalidad: "Española"
        },
        fechaPrimeraEdicion: "04/07/1983",
        isbn: "123456789"
    }, {
        titulo: "JavaScript en el Lado del Servidor",
        editorial: "Editorial Programacion en el Red",
        autor:{
            nombreCompleto: "Ismael Lopez Quintero",
            fechaNacimiento: "07/07/1983",
            nacionalidad: "Española"
        },
        fechaPrimeraEdicion: "05/06/1998",
        isbn: "987654321"
    }, {
        titulo: "Introduccion a JavaScript",
        editorial: "Editorial Universitaria de Programadores",
        autor:{
            nombreCompleto: "Agustin Mendez Castaño",
            fechaNacimiento: "03/05/1993",
            nacionalidad: "Española"
        },
        fechaPrimeraEdicion: "06/08/2005",
        isbn: "789123456"
    }
];

QUnit.test("Prueba Array", function(assert){
    assert.equal(biblioteca[1].autor.nombreCompleto, "Ismael Lopez Quintero", "Autor 2");
})
