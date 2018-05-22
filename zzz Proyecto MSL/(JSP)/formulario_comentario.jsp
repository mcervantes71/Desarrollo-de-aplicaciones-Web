<!DOCTYPE html>

<%@ page import="java.sql.Connection" %>
<%@ page import="java.sql.DriverManager" %>
<%@ page import="java.sql.SQLException" %>
<%@ page import="java.sql.Statement" %>
<%@ page import="java.sql.ResultSet" %>

<html>
    <head>
        <title>Solicitud de permiso</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Aprobar/Denegar</h1>

            <%
                String id = request.getParameter("id");

                out.println("<form action='comentario_guardar.jsp' method='POST'>" +
                    "<div class='form-group'>" +
                        "<label for='leave_request_id'>Id Solicitud</label>" +
                        "<input type='number' class='form-control' name='leave_request_id' value='" + id + "' readonly/>" +
                    "</div>" +
                    "<div class='form-group'>" +
                        "<label for='status'>Status</label>" +
                        "<select class='form-control' name='status'>" +
                            "<option value='1'>Aprobada</option>" +
                            "<option value='2'>Denegada</option>" +
                        "</select>" +
                    "</div>" +
                    "<div class='form-group'>" +
                        "<label for='comment'>Comentario</label>" +
                        "<textarea class='form-control' name='comment' rows='3' onkeyup='validar_texto(this.value)' ></textarea>" +
                    "</div>" +
                    "<button type='submit' class='btn btn-primary'>Guardar</button>" +
                    "<button type='submit' class='btn btn-danger' formaction='permisos.jsp' formmethod='POST'>Cancelar</button>" +
                "</form>");   
            %>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
            <script src="script.js"></script>
        </div>
    </body>
</html>