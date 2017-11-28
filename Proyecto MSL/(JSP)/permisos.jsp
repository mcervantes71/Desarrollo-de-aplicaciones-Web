<!DOCTYPE html>

<%@ page import="java.sql.Connection" %>
<%@ page import="java.sql.DriverManager" %>
<%@ page import="java.sql.SQLException" %>
<%@ page import="java.sql.Statement" %>
<%@ page import="java.sql.ResultSet" %>

<html>
    <head>
        <title>Permisos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.jsp">Empleados</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="permisos.jsp">Permisos</a>
                    </li>  
                </ul>
            </div>  
        </nav>
        <div class="container">
            <h1>Permisos</h1>

            <form action="formulario_solicitud.html">
                <button type="submit" class="btn btn-primary">Nuevo</button>
            </form>
            <%
                try
                {
                    String conexionURL = "jdbc:mysql://localhost:3306/hr";
                    String user = "Admin";
                    String password = "123456";
                    
                    Class.forName("com.mysql.jdbc.Driver");
                    
                    Connection conexion = DriverManager.getConnection(conexionURL, user, password);
                    
                    String  comando = "SELECT R.leave_request_id, " +
                                          "E.first_name, " +
                                          "E.last_name, " +
                                          "R.number_of_days, " +
                                          "R.type_of_leave, " +
                                          "R.status " +
                                      "FROM Employees AS E " +
                                      "INNER JOIN Leave_requests AS R " +
                                      "ON E.employee_id = R.employee_id;";
                    
                    Statement declaracion =  conexion.createStatement();
                    
                    ResultSet resultado = declaracion.executeQuery(comando);
                    
                    out.println("<table class='table'>" +
                                    "<thead>" +
                                        "<tr>" +
                                            "<th scope='col'>Id</th>" +
                                            "<th scope='col'>Nombre</th>" +
                                            "<th scope='col'>Apellido</th>" +
                                            "<th scope='col'>#D&iacute;as</th>" +
                                            "<th scope='col'><center>Tipo</center></th>" +
                                            "<th scope='col'><center>Status</center></th>" +
                                            "<th scope='col'></th>" +
                                            "<th scope='col'></th>" +
                                        "</tr>" +
                                    "</thead>" +
                                    "<tbody>");
                    
                    String fila;
                    
                    while(resultado.next())
                    {
                        fila = "<tr>" +
                                    "<td scope='row'>" + resultado.getInt("leave_request_id") +"</td>" +
                                    "<td>" + resultado.getString("first_name") + "</td>" +
                                    "<td>" + resultado.getString("last_name") + "</td>" +
                                    "<td><center>" + resultado.getInt("number_of_days") + "</center></td>" +
                                    "<td>" + resultado.getString("type_of_leave") + "</td>";
                        
                        String status = resultado.getString("status");
                        
                        switch(status)
                        {
                            case "0":
                                status = "Enviada";
                                fila = fila + "<td><a href='formulario_comentario.jsp?id=" + resultado.getInt("leave_request_id") + "' alt='Aprobar/Denegar' title='Aprobar/Denegar'>" + status + "</a></td>" +
                                                 "<td><a href='formulario_solicitud_modificar.jsp?id=" + resultado.getInt("leave_request_id") + "' alt='Modificar Solicitud' title='Modificar Solicitud'>Modificar</a></td>" +
                                                 "<td><a href='solicitud_borrar.jsp?id=" + resultado.getInt("leave_request_id") + "' alt='Borrar Solicitud' title='Borrar Solicitud'>Borrar</a></td>" +
                                             "</tr>";
                                break;
                            case "1":
                                status = "Aprobada";
                                fila = fila + "<td><a href='solicitud_validar.jsp?id=" + resultado.getInt("leave_request_id") + "' alt='Aprobar/Denegar' title='Aprobar/Denegar'>" + status + "</a></td>" +
                                                 "<td></td>" +
                                                 "<td></td>" +
                                             "</tr>";
                                break;
                            case "2":
                                status = "Denegada (Sup)";
                                fila = fila + "<td>" + status + "</td>" +
                                                 "<td><a href='formulario_solicitud_modificar.jsp?id=" + resultado.getInt("leave_request_id") + "' alt='Modificar Solicitud' title='Modificar Solicitud'>Modificar</a></td>" +
                                                 "<td></td>" +
                                             "</tr>";
                                break;
                            case "3":
                                status = "Denegada (RH)";
                                fila = fila + "<td>" + status + "</td>" +
                                                 "<td><a href='formulario_solicitud_modificar.jsp?id=" + resultado.getInt("leave_request_id") + "' alt='Modificar Solicitud' title='Modificar Solicitud'>Modificar</a></td>" +
                                                 "<td></td>" +
                                             "</tr>";
                                break;
                            case "4":
                                status = "Validada";
                                fila = fila + "<td><strong>" + status + "</strong></td>" +
                                                 "<td></td>" +
                                                 "<td></td>" +
                                             "</tr>";
                                break;
                        }
                        
                        out.println(fila);
                    }
                    
                    out.println("</tbody></table>");
                    
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