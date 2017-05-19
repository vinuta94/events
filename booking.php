 <?php
    // Start the session
   session_start();
    include_once('dbConnect.php');  //connect to config file
        $var = $_SESSION["eid"];
         echo $var;
       // $eventid=$_SESSION['eid'];
     $userid = $_SESSION["id"] ;
   
        echo $userid;
        // echo $eventid; 
		$banner = $_SESSION["image"] ;
		$total = $_SESSION["amt"] ;
	?>
       
<html>

    <body bgcolor="108b9e">
		<form method="post" action="#">
       
        
            NO OF TICKETS: <input id="ticket" type="text" name="ticket"/> <br>
            
            <input type="submit" name="submit" value="Submit" />
          </form>
		
   		<?php
       
    $sql = "SELECT * FROM event_details WHERE eid = '$var' ";
      $result = $conn->query($sql);
       while($array = mysqli_fetch_array($result))
         {
             $title = $array['ename'];
                $organiser = $array['eorganizer'];
                $detail = $array['description'];
                $venue = $array['venue'];
                $startdate = $array['startdate'];
                $enddate = $array['enddate'];
                $websiteurl = $array['url'];
                $price = $array['ticketprice'];
                $mobile1 = $array['contact1'];
                $mobile2 = $array['contact2'];
                $seat = $array['seats_ava'];
                $banner = $array['image'];
           
         }
    $sql2 = "SELECT * FROM member WHERE id = '$userid' ";
      $result2 = $conn->query($sql2);
       while($array2 = mysqli_fetch_array($result2))
         {
             $uname = $array2['name'];
                $lname = $array2['lastname'];
                $email = $array2['email'];
                $num = $array2['phoneno'];
              
         }
    
    echo "Summary:";
    echo "<br />";
       include_once('dbConnect.php');
    if (isset($_POST['submit'])) {
		
    $tnum=$_POST['ticket'];
		if($tnum < 6) {
    $Total = $price * $tnum;
		
    $sql = mysqli_query($conn,"insert into booking (eid, id, seats, amt) values ($var,$userid,$tnum,$Total)");
    $sql = mysqli_query($conn,"update event_details set seats_ava=seats_ava-$tnum where eid=$var");
			header('Location: confirm.php');
		 } 
		else {
		 echo"Your Can Book Minimum 5 Tickets";
	} } 
       ?>
  
	</body>
</html>