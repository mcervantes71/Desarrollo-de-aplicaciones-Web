document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
});

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('select').formSelect();
    $('.datepicker').datepicker();
});


/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
let total_historial;
let nombre = 0, edad = 0, sexo = 0, direccion = 0, telefono = 0;

function Check_Historial_Clinico()
{
    total_historial = nombre + edad + sexo + direccion + telefono;

    if(total_historial === 0)
    {
        console.log("Empty Historial Clinico");
        $("#historial_clinico").removeClass("white-text green");
        $("#historial_clinico").removeClass("yellow");
        $("#historial_clinico").addClass("grey lighten-1");
        $("#historial_clinico > i").text("edit");
    }
    else if(total_historial < 5)
    {
        console.log("Missing something in Historial Clinico");
        $("#historial_clinico").removeClass("white-text green");
        $("#historial_clinico").removeClass("grey lighten-1");
        $("#historial_clinico").addClass("yellow");
        $("#historial_clinico > i").text("error");
    }
    else if(total_historial === 5)
    {
        console.log("Historial Clinico Done");
        $("#historial_clinico").removeClass("yellow");
        $("#historial_clinico").removeClass("grey lighten-1");
        $("#historial_clinico").addClass("white-text green");
        $("#historial_clinico > i").text("done");
    }
}

$("#nombre").on("input", function(){
    if($("#nombre").val() != "")
    {
        console.log("Nombre: " + $("#nombre").val());
        nombre = 1;
    }
    else
    {
        console.log("The name is empty :(");
        nombre = 0;
    }

    Check_Historial_Clinico();
});

$("#edad").on("input", function(){
    if($("#edad").val() != "")
    {
        console.log("Edad: " + $("#edad").val());
        edad = 1;
    }
    else
    {
        console.log("The edad is empty :(");
        edad = 0;
    }

    Check_Historial_Clinico();
});

$("#sexo").change(function(){
    if($("#sexo").val() != "")
    {
        console.log("sexo: " + $("#sexo").children("option:selected").val());
        sexo = 1;
    }
    else
    {
        console.log("The sexo is empty :(");
        sexo = 0;
    }

    Check_Historial_Clinico();
});

$("#direccion").on("input", function(){
    if($("#direccion").val() != "")
    {
        console.log("direccion: " + $("#direccion").val());
        direccion = 1;
    }
    else
    {
        console.log("The direccion is empty :(");
        direccion = 0;
    }

    Check_Historial_Clinico();
});

$("#telefono").on("input", function(){
    if($("#telefono").val() != "")
    {
        console.log("telefono: " + $("#telefono").val());
        telefono = 1;
    }
    else
    {
        console.log("The telefono is empty :(");
        telefono = 0;
    }

    Check_Historial_Clinico();
});
