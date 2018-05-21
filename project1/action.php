<?php
	 //get values passes from form in action.php file
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	//to prevent mysql injection
	
	//connect to the server and select database

	$db = mysql_connect("localhost", "root", "", "mydb");


	//query the database for user

	$result = mysql_query("select * from  user where username = '$username' and password = '$password'")
				or die("Failed to query databasse ".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password )
	{
		echo "login sucessfully".$row['username'];
	}
	else
	{
		echo "Failed to login";
	}


 ?>