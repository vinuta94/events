<html>
	 <body bgcolor="108b9e">
		<?php
		session_start();
    	include_once('dbConnect.php');  //connect to config file
        $var = $_SESSION["eid"];
        //echo $var;
    	$userid = $_SESSION["id"] ;
		
		$sql1 = "SELECT * FROM event_details WHERE eid = '$var' ";
      $result = $conn->query($sql1);
       while($array=mysqli_fetch_array($result))
         {
			 	$title=$array['ename'];
			
				$detail=$array['description'];
				$venue=$array['venue'];
				$startdate=$array['startdate'];
				$enddate=$array['enddate'];
				
				$price=$array['ticketprice'];
				$mobile1=$array['contact1'];
				
				$image=$array['image'];
				
			
		 }
	$sql2 = "SELECT * FROM member WHERE id = '$userid' ";
      $result2 = $conn->query($sql2);
       while($array2=mysqli_fetch_array($result2))
         {
			 $uname=$array2['name'];
				$lname=$array2['lastname'];
				$email=$array2['email'];
				$num=$array2['phoneno'];
				
		 }
		$sql3 = "SELECT * FROM booking WHERE id = '$userid' ";
      $result3 = $conn->query($sql3);
       while($array3=mysqli_fetch_array($result3))
         {
			 $ID=$array3['bid'];
				$eid=$array3['eid'];
				$no=$array3['seats'];
				$pr=$array3['amt'];
		 } 
		 
		 ?> 
		<div class="left">	
   <form action="" method="post"  enctype="multipart/form-data"> </form>
	 
	   <h4> Dear, <?php echo $uname; ?>
	   <h4>Thank you for Booking with us. </h4>
		   <h4>Your booking details </h4>
	   
        <table align="left" class="demo-table">
        
			<tr>
            <td>EVENT NAME: </td>
            <td><?php echo $title; ?></td>
          </tr>
			<tr>
            <td>EVENT DATE: </td>
            <td><?php echo $startdate; ?></td>
          </tr>
   <tr>
        <td>EVENT DESCRIPTION: </td>
        <td><?php echo $detail; ?></td>
        </tr>
			<tr>
        <td>EVENT VENUE: </td>
        <td><?php echo $venue; ?></td>
        </tr>
           
			<tr>
        <td> NO OF SEATS: </td>
        <td><?php echo $no; ?></td>
        </tr>
       <tr>
        <td>TICKET PRICE: </td>
        <td><?php echo $pr; ?></td>
        </tr>
            
				<tr>
        <td>ADDRESS: </td>
        <td><?php echo $address; ?></td>
        </tr>  
     <tr>
        <td>CONTACT NUMBER: </td>
        <td><?php echo $mobile1; ?></td>
        </tr>
         
            </table>
</div>
		
			<img height="350" width="350"src="<?php echo $image;?>">
		
		
		
	</body>
</html>



