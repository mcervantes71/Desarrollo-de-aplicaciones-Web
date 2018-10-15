QUnit.test("Prueba", function(assert){
    var autor = new Autor();
    autor.setNombreCompleto('Ismael Lopez Quintero');
    autor.setFechaPrimeraEdicion('04/07/1983');
    autor.setNacionalidad('Española');

    var libro = new Libro();
    libro.setTitulo('Aprendiendo Notacion JSON');
    libro.setEditorial('Publicaciones Universitarias SL');
    libro.setAutor(autor);
    libro.setFechaPrimeraEdicion('01/01/2012');
    libro.setIsbn('123456789');

    var tituloLibro = libro.getTitulo();
    var editorial = libro.getEditorial();
    var autorLibro = libro.getAutor();
    var nombreCompletoAutor = autorLibro.getNombreCompleto();
    var fechoNacimientoAutor = autorLibro.getFechaNacimiento();
    var nacionalidadAutor = autorLibro.getNacionalidad();
    var fechaPrimeraEdicion = autorLibro.getFechaPrimeraEdicion();
    var isbnLibro = libro.getIsbn();

    assert.equal(tituloLibro, 'Aprendiendo Notacion JSON', 'Titulo Correcto');
    assert.equal(editorial, 'Publicaciones Universitarias SL', 'Correcto');
    assert.equal(nombreCompletoAutor, 'Ismael Lopez Quintero', 'Correcto');
    assert.equal(fechoNacimientoAutor, '04/07/1983', 'Correcto');
    assert.equal(nacionalidadAutor, 'Española', 'Correcto');
    assert.equal(fechaPrimeraEdicion, '01/01/2012', 'Fecha Correcta');
    assert.equal(isbnLibro, '123456789', 'Isbn Correcto');
});
