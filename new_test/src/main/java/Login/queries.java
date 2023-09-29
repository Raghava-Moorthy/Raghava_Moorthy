package Login;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet("/queries")
public class queries extends HttpServlet {
	 private static final String DB_URL = "jdbc:mysql://localhost:3306/fms";
	    private static final String DB_USER = "root";
	    private static final String DB_PASSWORD = "01102003Rm@@";

	private static final long serialVersionUID = 1L;
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		try {
			HttpSession session = request.getSession();
			String userEmail = (String) session.getAttribute("UserEmail");
            Class.forName("com.mysql.cj.jdbc.Driver");
            String Message = request.getParameter("queries");

            Connection conn = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);
            String sql1 = "INSERT INTO query (Email,quer) VALUES ( ?, ?)";

            PreparedStatement stmt1 = conn.prepareStatement(sql1);
            
            
            stmt1.setString(1, userEmail);
            stmt1.setString(2, Message);
            stmt1.executeUpdate();
            stmt1.close();
            response.sendRedirect("/new_test/__src/query.html");            
            conn.close();

        } catch (Exception e) {
            e.printStackTrace();
            response.sendRedirect("/new_test/__src/error_404.html");
        }
	}

}
