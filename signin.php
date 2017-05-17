 <?php
$servername = "localhost";
$user = "root";
$pass = "root123";
$dbname = "event";

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
//$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];


// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO member (name, lastname, email, phoneno,username, password)
VALUES ('$name', '$lastname', '$email','$phoneno','$username','$password')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();


 
?> 
