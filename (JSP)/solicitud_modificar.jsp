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
        String leave_request_id = request.getParameter("leave_request_id");
        String employee_id = request.getParameter("employee_id");
        String start_date = request.getParameter("start_date");
        String end_date = request.getParameter("end_date");
        String return_date = request.getParameter("return_date");
        String number_of_days = request.getParameter("number_of_days");
        String type_of_leave = request.getParameter("type_of_leave");

        String  comando = "UPDATE Leave_requests " +
                          "SET leave_request_id = " + leave_request_id + ", " +
                              "employee_id = " + employee_id + ", " +
                              "start_date = '" + start_date + "', " +
                              "end_date = '" + end_date + "', " +
                              "return_date = '" + return_date + "', " +
                              "number_of_days = " + number_of_days + ", " +
                              "type_of_leave = '" + type_of_leave + "', " +
                              "status = '0' " +
                          "WHERE leave_request_id = " + original_id;

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