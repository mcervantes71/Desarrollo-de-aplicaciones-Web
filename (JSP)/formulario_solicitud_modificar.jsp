<!DOCTYPE html>

<%@ page import="java.sql.Connection" %>
<%@ page import="java.sql.DriverManager" %>
<%@ page import="java.sql.SQLException" %>
<%@ page import="java.sql.Statement" %>
<%@ page import="java.sql.ResultSet" %>

<html>
    <head>
        <title>Modificar Solicitud</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Modificar Solicitud</h1>
            <%
                try
                {
                    String conexionURL = "jdbc:mysql://localhost:3306/hr";
                    String user = "Admin";
                    String password = "123456";
                    
                    Class.forName("com.mysql.jdbc.Driver");
                    
                    Connection conexion = DriverManager.getConnection(conexionURL, user, password);
                    
                    String id = request.getParameter("id");
                     
                    String  comando = "SELECT * " +
                                      "FROM Leave_requests " +
                                      "WHERE leave_request_id =" + id;
                    
                    Statement declaracion =  conexion.createStatement();
                    
                    ResultSet resultado = declaracion.executeQuery(comando);

                    resultado.next();

                    out.println("<form action='solicitud_modificar.jsp' method='POST'>" +
                            "<div class='form-group'>" +
                                "<label for='leave_request_id'>Id Solicitud</label>" +
                                "<input type='hidden' class='form-control' name='original_id' value='" + resultado.getInt("leave_request_id") + "' />" +
                                "<input type='number' class='form-control' name='leave_request_id' value='" + resultado.getInt("leave_request_id") + "' readonly />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='employee_id'>Id Empleado</label>" +
                                "<input type='number' class='form-control' name='employee_id' value='" + resultado.getInt("employee_id") + "' />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='start_date'>Fecha del primer d&iacute;a</label>" +
                                "<input type='date' class='form-control' name='start_date' value='" + resultado.getString("start_date") + "' placeholder='AAAA-MM-DD' />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='end_date'>Fecha del &uacute;ltimo d&iacute;a</label>" +
                                "<input type='date' class='form-control' name='end_date' value='" + resultado.getString("end_date") + "' placeholder='AAAA-MM-DD' />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='return_date'>Fecha de regreso</label>" +
                                "<input type='date' class='form-control' name='return_date' value='" + resultado.getString("return_date") + "' placeholder='AAAA-MM-DD' />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='number_of_days'>N&uacute;mero de d&iacute;as</label>" +
                                "<select class='form-control' name='number_of_days'>" +
                                    "<option>1</option>" +
                                    "<option>2</option>" +
                                    "<option>3</option>" +
                                    "<option>4</option>" +
                                    "<option>5</option>" +
                                "</select>" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='type_of_leave'>Tipo de ausencia</label>" +
                                "<select class='form-control' name='type_of_leave'>" +
                                    "<option>Vacaciones</option>" +
                                    "<option>Enfermedad</option>" +
                                "</select>" +
                            "</div>" +
                            "<button type='submit' class='btn btn-primary'>Guardar</button>" +
                            "<button type='submit' class='btn btn-danger' formaction='permisos.jsp' formmethod='POST'>Cancelar</button>" +
                          "</form>");
                                   
                    declaracion.close();
                    conexion.close();
                }
                catch(SQLException e)
                {
                    out.println("Error: " + e.getMessage());
                }
            %>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        </div>
    </body>
</html>