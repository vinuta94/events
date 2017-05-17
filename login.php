<html>
<body bgcolor="lightblue"  >
    <div align="center" >
        <form action="login.php" method="post">
            <h4>LogIn</h4>
                 <input type="email" name="username" placeholder="email"/><br>
                 <input type="password" name="password" placeholder="password"/><br>
                 <input type="submit" name="submit" />
      </form>       
    </div>   
	<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname= "event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully to the database";


$email = $_POST['username'];
$password = $_POST['password'];
    //echo $email;
  // echo $password;
//if (isset($_POST['login'])) {

    //$email = mysqli_real_escape_string($conn, $_POST['email']);
   // $password = mysqli_real_escape_string($conn, $_POST['password']);

//echo "hello";
$sql1 = "SELECT * FROM event.member WHERE `username` = '$email' and password = '$password'";
    $result =mysqli_query($conn,$sql1);
//echo"welcome";

    if ($row = mysqli_fetch_assoc($result)) {
       // echo $row["id"];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        echo "Login Successfully";
    }
else {
        echo "Incorrect Email or Password!!!";
    }
//}
    ?> 
	
	</body>
</html>
