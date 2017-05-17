
<html>
	
<body>
<form>

No Of Seats: <input type="drop down" name="seats"><br>
<input type="submit" value="Book Now"> 
</form>


<?php
include "dbConnect.php";
$eid=$_GET['id'];
$n=$_POST['nk'];

$r=mysqli_query($conn,"select ticketprice from event_details where eid='$eid'");
while($arr=mysqli_fetch_array($r))
{
    $tprice=$arr[0];
}

$p = $n * $tprice;
	echo $n;
// echo "Booking Confirmed....!";
$sql = mysqli_query($conn,"INSERT INTO booking (id,eid,seats,price) VALUES (1,$eid,$n,$p)");
$sql = mysqli_query($conn,"UPDATE event_details SET seats=seats-$n where eid=$eid");
?>
</body>
<html>
