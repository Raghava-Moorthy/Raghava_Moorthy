package Hello;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/hello")
public class hello extends HttpServlet {
	static int Count = 0;
	private static final long serialVersionUID = 1L;

	public hello() {
		super();
	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter() ;
		Count++;
		out.print("<html><body><style>h3{text-align:center;}</style>");
		out.print("<h3>Count = "+Count+" Servlet</h3>");
		out.print("</body></html>");
		
	}
}
