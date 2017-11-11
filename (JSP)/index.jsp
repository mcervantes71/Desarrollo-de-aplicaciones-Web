<!DOCTYPE html>

<%@ page import="java.sql.Connection" %>
<%@ page import="java.sql.DriverManager" %>
<%@ page import="java.sql.SQLException" %>
<%@ page import="java.sql.Statement" %>
<%@ page import="java.sql.ResultSet" %>

<html>
    <head>
        <title>Empleados</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.jsp">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="permisos.jsp">Permisos</a>
                    </li>  
                </ul>
            </div>  
        </nav>
        <div class="container">
            <h1>Empleados</h1>

            <form action="formulario_empleado.html">
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
                    
                    String  comando = "SELECT * FROM Employees";
                    
                    Statement declaracion =  conexion.createStatement();
                    
                    ResultSet resultado = declaracion.executeQuery(comando);
                    
                    out.println("<table class='table'>" +
                                     "<thead>" +
                                         "<tr>" +
                                             "<th scope='col'>Id</th>" + 
                                             "<th scope='col'>Nombre</th>" +
                                             "<th scope='col'>Apellido</th>" +
                                             "<th scope='col'>Correo</th>" +
                                             "<th scope='col'></th>" +
                                             "<th scope='col'></th>" +
                                         "</tr>" +
                                    "</thead>" +
                                    "<tbody>");
                            
                    while(resultado.next())
                    {
                        out.println("<tr>" +
                                "<td scope='row'>" + resultado.getInt("employee_id") + "</td>" +
                                "<td>" + resultado.getString("first_name") + "</td>" +
                                "<td>" + resultado.getString("last_name") + "</td>" +
                                "<td>" + resultado.getString("email") + "</td>" +
                                "<td><a href='formulario_empleado_modificar.jsp?id=" + resultado.getInt("employee_id") + "' alt='Modificar Empleado' title='Modificar Empleado'>Modificar</a></td>" +
                                "<td><a href='empleado_borrar.jsp?id=" + resultado.getInt("employee_id") + "' alt='Borrar Empleado' title='Borrar Empleado'>Borrar</a></td>" + "</tr>" );
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