<html>
	<body>
		<?php
		session_start();
    include_once('dbConnect.php');  //connect to config file
        $var = $_SESSION["eid"];
         echo $var;
       // $eventid=$_SESSION['eid'];
     $userid = $_SESSION["id"] ;
   
        echo $userid;
echo "Booking Confirmed!<br />";
		 echo "Ticket Details:<br />";
    echo "Total Price is: ";
    echo $Total;?><br>
	USER NAME: <?php echo $uname; ?><br>
	EVENT NAME: <?php echo $title; ?><br>
	PHONE NUMBER: <?php echo $num; ?><br>
	</body>
</html>