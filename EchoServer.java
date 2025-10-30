//package FirstWebSys;
import java.io.*;
import java.net.*;

public class EchoServer {

    public static void main(String[] args) throws IOException {
        int portNum=5000;
        ServerSocket serverSocket;
        Socket clientSocket;
        PrintWriter out;
        BufferedReader in;
        String inputLine;

        serverSocket = new ServerSocket(portNum);

        System.out.printf("Listening to port 5000......\n");
        clientSocket = serverSocket.accept();
        System.out.printf("Cleint connection accepted.....\n");
        out = new PrintWriter(clientSocket.getOutputStream(),true);
        in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
        inputLine = in.readLine();
        System.out.printf("Message %s\n", inputLine);
        out.printf("Reieved: %s\n", inputLine);

        in.close();
        out.close();
        clientSocket.close();
        serverSocket.close();
    }
}