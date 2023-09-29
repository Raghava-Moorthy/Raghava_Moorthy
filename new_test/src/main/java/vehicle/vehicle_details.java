package vehicle;

import java.io.IOException;
import java.math.BigDecimal;
import java.sql.Connection;
import javax.servlet.http.HttpSession;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/vehicle_details")
public class vehicle_details extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		try {
			HttpSession session = request.getSession();
			String userName = (String) session.getAttribute("UserName");
			String userEmail = (String) session.getAttribute("UserEmail");
			String DB_USER = "root";
			String DB_PASS = "01102003Rm@@";
			String DB_URL = "jdbc:mysql://localhost:3306/fms";
			Class.forName("com.mysql.cj.jdbc.Driver");
			String Speed = request.getParameter("speed");
			String fuelType = request.getParameter("com_fuel");
			String vehicle = request.getParameter("selected_vehicle");
			BigDecimal Capacity = new BigDecimal(request.getParameter("tank"));
			BigDecimal Remaining = new BigDecimal(request.getParameter("amt"));
			BigDecimal Mileage = new BigDecimal(request.getParameter("mile"));
			Connection conn = DriverManager.getConnection(DB_URL, DB_USER, DB_PASS);
			String sql = "INSERT INTO FUEL_UPDATE (USERNAME, USEREMAIL, SPEED_CC, VEHICLE, INSERTED_ON, FUEL_TYPE, TANK_CAPACITY, REMAINING, MILEAGE) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?)";
			PreparedStatement stmt = conn.prepareStatement(sql);
			stmt.setString(1, userName);
	        stmt.setString(2, userEmail);
	        stmt.setString(3, Speed);
	        stmt.setString(4, vehicle);
	        stmt.setString(5, fuelType);
	        stmt.setBigDecimal(6, Capacity);
	        stmt.setBigDecimal(7, Remaining);
	        stmt.setBigDecimal(8, Mileage);
			stmt.executeUpdate();
			conn.close();
			response.sendRedirect("/new_test/__src/apply.html");
		} catch (Exception e) {
			e.printStackTrace();
		}

	}
}
