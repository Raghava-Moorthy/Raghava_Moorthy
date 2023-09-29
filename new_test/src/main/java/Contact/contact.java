package Contact;
import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/contact")
public class contact extends HttpServlet {
    private static final long serialVersionUID = 1L;
    private static final String DB_URL = "jdbc:mysql://localhost:3306/fms";
    private static final String DB_USER = "root";
    private static final String DB_PASSWORD = "01102003Rm@@";

    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            String Email= request.getParameter("email");
            String Subject = request.getParameter("subject");
            String Message = request.getParameter("message");

            Connection conn = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);
            String sql1 = "INSERT INTO Contact (EMAIL,SUBJECT,MESSAGE) VALUES ( ?, ?, ?)";

            PreparedStatement stmt1 = conn.prepareStatement(sql1);
            
            
            stmt1.setString(1, Email);
            stmt1.setString(2, Subject);
            stmt1.setString(3, Message);
            stmt1.executeUpdate();
            stmt1.close();
            response.sendRedirect("/new_test/__src/index.html");            
            conn.close();

        } catch (Exception e) {
            e.printStackTrace();
            response.sendRedirect("/new_test/__src/error_404.html");
        }
    }
}
