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

        String original_id = request.getParameter("original_id");
        String employee_id = request.getParameter("employee_id");
        String first_name = request.getParameter("first_name");
        String last_name = request.getParameter("last_name");
        String email = request.getParameter("email");
        String manager = request.getParameter("manager");

        String  comando = "UPDATE Employees " +
                          "SET employee_id = " + employee_id + ", " +
                              "first_name = '" + first_name + "', " +
                              "last_name = '" + last_name + "', " +
                              "email = '" + email + "', " +
                              "manager = '" + manager + "' " +
                          "WHERE employee_id = " + original_id;

        Statement declaracion =  conexion.createStatement();
out.println(comando);
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