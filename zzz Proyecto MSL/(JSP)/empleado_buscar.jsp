<!DOCTYPE html>

<%@ page import="java.sql.Connection" %>
<%@ page import="java.sql.DriverManager" %>
<%@ page import="java.sql.SQLException" %>
<%@ page import="java.sql.Statement" %>
<%@ page import="java.sql.ResultSet" %>

<html>
    <head>
        <title>Informaci&oacute;n Empleado</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Informaci&oacute;n Empleado</h1>
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
                                      "FROM Employees " +
                                      "WHERE employee_id =" + id;

                    Statement declaracion =  conexion.createStatement();

                    ResultSet resultado = declaracion.executeQuery(comando);

                    resultado.next();

                    out.println("<form action='index.jsp' method='POST'>" +
                            "<div class='form-group'>" +
                                "<label for='employee_id'>Id Empleado</label>" +
                                "<input type='text' class='form-control' name='employee_id' value='" + resultado.getString("employee_id") + "' readonly />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='first_name'>Nombre</label>" +
                                "<input type='text' class='form-control' name='first_name' value='" + resultado.getString("first_name") + "' readonly />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='last_name'>Apellido</label>" +
                                "<input type='text' class='form-control' name='last_name' value='" + resultado.getString("last_name") + "' readonly />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='email'>Correo</label>" +
                                "<input type='email' class='form-control' name='email' value='" + resultado.getString("email") + "' readonly />" +
                            "</div>" +
                            "<div class='form-group'>" +
                                "<label for='manager'>Supervisor</label>" +
                                "<input type='text' class='form-control' name='manager' value='" + resultado.getString("manager") +"' readonly />" +
                            "</div>");


                    comando = "SELECT * " +
                              "FROM Leave_requests " +
                              "WHERE employee_id =" + id;

                    declaracion =  conexion.createStatement();

                    resultado = declaracion.executeQuery(comando);

                    int count = 0;
                    while(resultado.next())
                      count ++;

                    resultado = declaracion.executeQuery(comando);

                    out.println("<h1>Permisos</h1>");

                    if(count > 0)
                    {
                        out.println("<table class='table'>" +
                                        "<thead>" +
                                            "<tr>" +
                                                "<th scope='col'>Id</th>" +
                                                "<th scope='col'>Inicio</th>" +
                                                "<th scope='col'>Finaliza</th>" +
                                                "<th scope='col'>Regreso</th>" +
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
                                       "<td>" + resultado.getString("start_date") + "</td>" +
                                       "<td>" + resultado.getString("end_date") + "</td>" +
                                       "<td>" + resultado.getInt("return_date") + "</td>" +
                                       "<td>" + resultado.getInt("number_of_days") + "</td>" +
                                       "<td>" + resultado.getString("type_of_leave") + "</td>";

                            String status = resultado.getString("status");

                            switch(status)
                            {
                                case "0":
                                    status = "Enviada";
                                    break;
                                case "1":
                                    status = "Aprobada";
                                    break;
                                case "2":
                                    status = "Denegada (Sup)";
                                    break;
                                case "3":
                                    status = "Denegada (RH)";
                                    break;
                                case "4":
                                    status = "Validada";
                                    break;
                            }

                            fila = fila + "<td>" + status + "</td>" +
                                      "</tr>";

                            out.println(fila);
                        }

                        out.println("</tbody></table>");
                    }
                    else
                    {
                        out.println("O permisos<br />");
                    }

                    out.println("<button type='submit' class='btn btn-danger'>Regresar</button>" +
                        "</form>");

                    declaracion.close();
                    conexion.close();
                }
                catch(SQLException e)
                {
                    out.println("No Hay Informaci&oacute;n");
                }
            %>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
