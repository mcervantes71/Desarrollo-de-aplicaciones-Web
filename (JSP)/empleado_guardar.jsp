<%@ page import="java.sql.Connection" %>
<%@ page import="java.sql.DriverManager" %>
<%@ page import="java.sql.SQLException" %>
<%@ page import="java.sql.Statement" %>
<%@ page import="java.sql.ResultSet" %>

<%
    try
    {
        String conexionURL = "jdbc:mysql://localhost:3306/hr";
        String user = "Admin";
        String password = "123456";

        Class.forName("com.mysql.jdbc.Driver");

        Connection conexion = DriverManager.getConnection(conexionURL, user, password);

        String first_name = request.getParameter("first_name");
        String last_name = request.getParameter("last_name");
        String email = request.getParameter("email");
        String manager = request.getParameter("manager");

        String  comando = "INSERT INTO Employees " +
                              "(first_name, " +
                               "last_name, " +
                               "email, " +
                               "manager, " +
                               "available_annual_leaves, " +
                               "available_sick_leaves) " +
                           "VALUES" +
                               "('" + first_name + "', " +
                                "'" + last_name + "', " +
                                "'" + email + "', " +
                                "'" + manager +"', " +
                                       "3, " +
                                       "3)";

        Statement declaracion =  conexion.createStatement();

        declaracion.execute(comando);

        declaracion.close();
        conexion.close();
        
        response.sendRedirect("index.jsp");
    }
    catch(SQLException e)
    {
        out.println("Error: " + e.getMessage() + "<br /><a href='index.jsp'>Regresar</a>");
    }
%>