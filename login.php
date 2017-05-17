<?php
	session_start();
	include('dbConnect.php');//connect to database
    $eid = $_SESSION['eid'];
?>
<html>
	<title>Sign in</title>
	 	<body>
			<?php	
				//echo $eid;  
	
    			$username = $_POST['username'];
   	 			$password = $_POST['password'];
    
				if (isset($_POST['login'])) {

				//$username = mysqli_real_escape_string($conn, $_POST['username']);
	   			// $password = mysqli_real_escape_string($conn, $_POST['password']);


    			$sql = "SELECT * FROM member WHERE `username` = '$username' and `password` = '$password'";
				$result = mysqli_query($conn,$sql);
				$count = mysqli_num_rows($result);
				// echo $count;
    
				if ($count > 0) 
					{
						$row = mysqli_fetch_assoc($result);
         				echo $row["id"];
     	 				$_SESSION['id'] = $row['id'];
         				$_SESSION['name'] = $row['username'];
         				echo "Login Successfully";
		 				header('Location: login.html');
    				}
				else
					{
        				echo "Incorrect Email or Password!!!";	
     				}
    										}
   	 	?> 
	
		</body>
</html>
