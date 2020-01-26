<?php
ob_start();
include("function.php");
				$host="localhost";
				$username="******";
				$password="*********";
				$dbname = "*****";
				$conn=mysqli_connect($host,$username,$password,$dbname);
				if(mysqli_connect_errno())
				{
					$db_connection_status =  "Error occured when connecting with database";
					$error_code = 0;
				}
//	$sql = mysql_select_db ($conn,$dbname) or die("can't connect to database");
?>

<?php

	/*
CREATE TABLE cyber (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(100) NOT NULL,
college VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
phone VARCHAR(100) NOT NULL,
game VARCHAR(100) NOT NULL,
UNIQUE(email)
)

*/

	function check($input){
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}

	$name=$college=$email=$mbno=$game="";

	$name=check($_POST["name"]);
	$college=check($_POST["college"]);
	$email=check($_POST["email"]);
	$mbno=check($_POST["phone"]);
	$game=check($_POST["game"]);
	$array = array("cod" => "Call of Duty 4", "fifa" => "FIFA 15", "nfs" => "Need for Speed", "csgo" => "Counter Strike" );

		$sql1="INSERT INTO cyber(name,college,email,phone,game) VALUES ('$name','$college','$email','$mbno','$game')";
	//	echo $sql1."     ";
		$sql2 = "SELECT email FROM cyber WHERE email='$email'";
	//	echo $sql2 ;
		$result=mysqli_query($conn,$sql2);
	//	echo mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0){
			$message = "user already exists";
			echo "<script type='text/javascript'>alert('$message');window.location.href='index.html';</script>";
		}

		else{
		//	echo " i am inside else part ";
			if(mysqli_query($conn,$sql1)== TRUE){
			//	echo " i am inside if part ";
				$message = "Congratulations. You have Successfully Registered for Cyber Crusades";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
						send_email($email, $name, $mbno, $college, $array[$game]);
						echo "<script type='text/javascript'>window.location.href='index.html';</script>";
			}
			else{
				$message ="Error: " . $sql1 . "<br>" . mysqli_error($conn);
			//	echo $message;
				echo "<script type='text/javascript'>alert('$message');window.location.href='index.html';</script>";
			}
		}
	mysqli_close($conn);
?>
