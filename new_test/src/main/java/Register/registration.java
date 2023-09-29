package Register;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import javax.servlet.http.HttpSession;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/registration")
public class registration extends HttpServlet {
	private static final long serialVersionUID = 1L;
	private static final String DB_URL = "jdbc:mysql://localhost:3306/fms";
	private static final String DB_USER = "root";
	private static final String DB_PASSWORD = "01102003Rm@@";

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			String Name = request.getParameter("name");
			String Email = request.getParameter("email");
			String Password = request.getParameter("pass");
			String Contact = request.getParameter("Contact");
			;

			Connection conn = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);

			String userCheck = "SELECT UserName, Email from Login where UserName=? and Email=?";
			PreparedStatement stmt = conn.prepareStatement(userCheck);
			stmt.setString(1, Name);
			stmt.setString(2, Email);
			ResultSet rest = stmt.executeQuery();
			if (rest.next()) {
				response.sendRedirect("/new_test/__src/login.html");
			} else {

				String sql1 = "INSERT INTO login (UserName, Email, Password, Mobile) VALUES (?, ?, ?, ?)";
				PreparedStatement stmt1 = conn.prepareStatement(sql1);
				
				HttpSession session = request.getSession();
				session.setAttribute("UserName", Name);
				session.setAttribute("UserEmail", Email);

				stmt1.setString(1, Name);
				stmt1.setString(2, Email);
				stmt1.setString(3, Password);
				stmt1.setString(4, Contact);
				stmt1.executeUpdate();
				stmt1.close();

				response.sendRedirect("/new_test/__src/personal.html");
			}
			stmt.close();
			conn.close();

		} catch (Exception e) {
			e.printStackTrace();
			response.sendRedirect("/new_test/__src/error_404.html");
		}
	}
}
