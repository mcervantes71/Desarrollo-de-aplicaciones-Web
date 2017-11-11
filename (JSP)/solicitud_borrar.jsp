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

        String id = request.getParameter("id");

        String  comando = "DELETE FROM Leave_requests " +
                          "WHERE leave_request_id = " + id;

        Statement declaracion =  conexion.createStatement();

        declaracion.execute(comando);

        declaracion.close();
        conexion.close();
        
        response.sendRedirect("permisos.jsp");
    }
    catch(SQLException e)
    {
        out.println("Error: " + e.getMessage() + "<br /><a href='permisos.jsp'>Regresar</a>");
    }
%>