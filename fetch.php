<html>
<title>Event details</title>
<body bgcolor="white">

<?php
	session_start();
	$eid=$_GET['id'];
	$_SESSION['eid'] = $eid;
    require('dbConnect.php');//connect to database
    $sql = "SELECT * FROM event_details where eid = $eid";
	
    $result =mysqli_query($conn,$sql);

    $count = mysqli_num_rows($result);
	
    if($count > 0)
    {
        while ($row=mysqli_fetch_assoc($result))
            {
                echo "<div id='contentItem'>";?>
             Event Name: <?php echo $row['ename'];
				echo $name;
                echo "<br />";?><br>
               Event Organizer: <?php echo $row['eorganizer'];
                echo "<br />";?><br>
                Event Description: <?php echo $row['description'];
                echo "<br />";?><br>
				Event Venue: <?php echo $row['venue'];
                echo "<br />";?><br>
              Event Start Date: <?php echo $row['startdate'];
                echo "<br />"; ?><br>
             Event end Date: <?php  echo $row['enddate'];
                echo "<br />"; ?><br>
				Ticket Price: <?php echo $row['ticketprice'];
                echo "<br />";?> <br>
	
		 Event Banner:
			
                <img src= " <?php echo $row['image'];?>"
				    
           <?php      echo "<br />";?><br>
					 <br>
              Book <a href="login.html?id=<?php echo $id;?>">BOOK NOW</a>
              <?php 
               echo "</div>";
                echo "<br />";
                echo "<br />";
               
            }
    }
    else
    {
         echo 'no data';
    }
    ?>
</body>                     
</html>
