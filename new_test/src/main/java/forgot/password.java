package forgot;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.ResultSet;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/password")
public class password extends HttpServlet {
    private static final long serialVersionUID = 1L;
       
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        try {
            PrintWriter out = response.getWriter();
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/fms", "root", "01102003Rm@@");
            String email = request.getParameter("email");
            String newPassword = request.getParameter("pass");
            
            PreparedStatement checkEmailStmt = con.prepareStatement("SELECT * FROM login WHERE Email = ?");
            checkEmailStmt.setString(1, email);
            ResultSet rs = checkEmailStmt.executeQuery();
            
            if (rs.next()) {
                PreparedStatement updatePasswordStmt = con.prepareStatement("UPDATE login SET Password = ? WHERE Email = ?");
                updatePasswordStmt.setString(1, newPassword);
                updatePasswordStmt.setString(2, email);
                int updateResult = updatePasswordStmt.executeUpdate();
                if (updateResult > 0) {
                	response.sendRedirect("/new_test/__src/login.html");
                } else {
                    out.println("<font color=red size=18>Failed to update password!<br>");
                }
            } else {
                out.println("<font color=red size=18>Email not found!<br>");
            }
            
            con.close();
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
