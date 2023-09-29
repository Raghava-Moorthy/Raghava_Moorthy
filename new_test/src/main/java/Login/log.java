package Login;

import java.io.IOException;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.annotation.*;
import javax.servlet.http.*;

@WebServlet("/log")
public class log extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/fms", "root", "01102003Rm@@");

			String email = request.getParameter("email");
			String password = request.getParameter("pass");
			
			String sql = "SELECT Email, Password, UserName FROM Login WHERE Email = ? AND Password = ?";

			PreparedStatement ps = con.prepareStatement(sql);
			ps.setString(1, email);
			ps.setString(2, password);

			ResultSet rs = ps.executeQuery();

			if (rs.next()) {
			    String userName = rs.getString("UserName");
			    HttpSession session = request.getSession();
			    session.setAttribute("UserName", userName);
			    session.setAttribute("UserEmail", email);
			    response.sendRedirect("/new_test/__src/apply.html");
			} else {
			    response.sendRedirect("/new_test/__src/login.html?error=invalid");
			}

			con.close();
		} catch (ClassNotFoundException | SQLException | IOException e) {
			e.printStackTrace();
		}
	}
}
