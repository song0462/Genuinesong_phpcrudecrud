<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Find Employee</title>
</head>

<body>
	<h2>Find an Employee Record</h2>
	<hr>
	<?php

                //access credentials fils
                include 'credentials.php';

                //this is the php object oriented style of creating a mysql connection
		$conn = new mysqli($servername, $username, $password, $dbname);  
	
		//check for connection success
		if ($conn->connect_error) {
			die("MySQL Connection Failed: " . $conn->connect_error);
		}
		echo "MySQL Connection Succeeded<br><br>";
		
		//pull the attribute that was passed with the html form GET request and put into a local variable.
		$lastname = $_GET["lastname"];

		echo "Searching for: " . $lastname;
	
		echo "<br><br>";
		
		//create the SQL select statement, notice the funky string concat at the end to variablize the query
		//based on using the GET attribute
		$sql = "SELECT first_name,last_name,hire_date FROM employees where last_name = '".$lastname."'";
	
		//put the resultset into a variable, again object oriented way of doing things here
		$result = $conn->query($sql);
	
		//if there were no records found say so, otherwise create a while loop that loops through all rows
		//and echos each line to the screen. You do this by creating some crazy looking echo statements
		// in the form of HTMLText . row[column] . HTMLText . row[column].   etc...
		// the dot "." is PHP's string concatenator operator
		if ($result->num_rows > 0){
			//print rows
			while($row = $result->fetch_assoc()){
				echo "Employee: " . $row["first_name"]. " " . $row["last_name"]. " " . $row["hire_date"]. "<br>";
			}
		} else {
			echo "No Records Found";
		}
		
		//always close the DB connections, don't leave 'em hanging
		$conn->close();
		
	?>
</body>
</html>
