package dashboard;
import java.io.IOException;
import java.sql.Connection;
import java.math.BigDecimal;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Timestamp;
import java.sql.ResultSet;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet("/dashboard")
public class dashboard extends HttpServlet {
    private static final long serialVersionUID = 1L;
    
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        String fuelValueStr = request.getParameter("fuel-value");
        BigDecimal Remaining = new BigDecimal(fuelValueStr);
        HttpSession session = request.getSession();
        String userName = (String) session.getAttribute("UserName");

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/fms", "root",
                    "01102003Rm@@");

            String sql = "UPDATE fuel_update SET REMAINING = ?, INSERTED_ON = ? WHERE USERNAME = ?";

            PreparedStatement preparedStatement = connection.prepareStatement(sql);
            preparedStatement.setBigDecimal(1, Remaining);

           
            Timestamp currentTimestamp = new Timestamp(System.currentTimeMillis());
            preparedStatement.setTimestamp(2, currentTimestamp);

            preparedStatement.setString(3, userName);

            int rowsUpdated = preparedStatement.executeUpdate();

            if (rowsUpdated > 0) {
            	response.sendRedirect("/new_test/__src/apply.html"); 
            } else {
                response.getWriter().println("Fuel update failed.");
            }

            preparedStatement.close();
            connection.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
            response.getWriter().println("An error occurred: " + e.getMessage());
        }
    }

}