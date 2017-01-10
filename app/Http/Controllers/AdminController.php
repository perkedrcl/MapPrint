<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends BaseController
{

	public function getAdmin() {
		return View('admin');
	}

	public function authenticate(){
		$response = '';
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('admin');
        }
        else {
        	return View('login');
        	$response = 'Podaci nisu tačni';
        }
    }

    public function sendEmail() {
    	$servername = "localhost";
		$email = "email";
		$response = '';
		// Create connection
		$conn = new mysqli($servername, $email);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";

		$sql = 'SELECT email FROM Emails';
	    mysql_select_db('Emails');
	    $retval = mysql_query( $sql, $conn );
	   
	    if(! $retval ) {
	      die('Could not get data: ' . mysql_error());
	    }
	   
	    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	      echo "email :{$row['email']}  <br> ".
	         "--------------------------------<br>";
	    }
	   
	    echo "Fetched data successfully\n";
	   
	    mysql_close($conn);

	    $recipients=$retval
	    $to = 'mapprint@gmail.com';
		$subject = "E-mail subject";
		$body = "E-mail body";
		$headers = 'From: mapprint@gmail.com' . "\r\n" ;
		$headers .= 'Reply-To: mapprint@gmail.com' . "\r\n";
		$headers .= 'BCC: ' . implode(', ', $recipients) . "\r\n";

		mail($to, $subject, $body, $headers);
		    
		}
		public function read() {

		$con=mysqli_connect("Emails");
		// Check connection
		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con,"SELECT * FROM Emails");

		echo "<table border='1'>
			  <tr>
			  <th>Firstname</th>
			  <th>Lastname</th>
			  </tr>";

		while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";

		mysqli_close($con);

		}

}
