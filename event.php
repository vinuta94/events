<html>
<body bgcolor="lightblue"  >
    <div align="center" >
			
        <form action="" method="POST">
			<table>
			<tr>
     <td> Event Name   <input type="text" name="name" > </td><br> 
       <td> Organizer   <input type="text" name="oragnizer" > </td><br>
        Description  <td> <input type="text" name="description" > </td><br>
      Venue   <td> <input type="text" name="venue" > </td><br>
        
        Start Date  <td> <input type="date" name="startdate"> </td><br>
        End Date  <td> <input type="date" name="enddate"> </td><br>
         Banner  <td> <input type="file" name="image"> </td><br>
        Available Seats  <td> <input type="text" name="seats" > </td><br> 
		Url  <td> <input type="text" name="url"> </td><br>
        Contact Number1  <td> <input type="text" name="num1" > </td><br>
			Contact Number2  <td> <input type="text" name="num2" > </td><br>
        
         <td> <input type="submit" name="Add Event" placeholder="submit"/> </td>
            </form>
		</table>
    </div>
       
<?php
require('dbConnect.php');
$name = $_POST['ename'];
$organizer = $_POST['eorganizer'];
$description = $_POST['description'];
$venue = $_POST['venue'];
$start = $_POST['startdate'];
$end = $_POST['enddate'];
$tprice = $_POST['ticketprice'];
$image = $_POST['image'];
$seats = $_POST['seats_ava'];
$contact1 = $_POST['contact1'];
$contact2 = $_POST['contact2'];



// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO event_details (eid, ename, eorganizer, description, venue, startdate, enddate, ticketprice, image, seats_ava, contact1, contact2)
VALUES ('$name', '$organizer', '$description','$venue','$start','$end','$tprice','$image','$seats','$contact1','$contact2')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 
	<?php echo $name ?><br>
	<?php echo $organizer ?><br>
	<?php echo $description ?><br>
	<?php echo $venue ?><br>
	<?php echo $start ?><br>
	<?php echo $end ?><br>
	<?php echo $tprice ?><br>
	<?php echo $image ?><br>
	<?php echo $seats ?><br>
	<?php echo $contact1 ?><br>
	<?php echo $contact2 ?><br>
	
	
	 </body>
</html>

