<html>
<body bgcolor="lightblue"  >
    <div align="center" >
			
        <form action="" method="POST">
			
		<h2> Event Name</h2>   <input type="text" name="name" > <br> 
        	<h2> Organizer  </h2> <input type="text" name="oragnizer" > <br>
		<h2> Description </h2>  <input type="text" name="description" ><br>
		<h2> Venue </h2>   <input type="text" name="venue" > <br>
		<h2>  Start Date <h2> <input type="date" name="startdate"> <br>
       		<h2> End Date </h2> <input type="date" name="enddate"> <br>
		<h2> Banner </h2>  <input type="file" name="image"> <br>
		<h2>	Available Seats </h2><input type="text" name="seats" > <br> 
		<h2> Url </h2> <input type="text" name="url"> br>
		<h2> Contact Number1 </h2> <input type="text" name="num1" ><br>
		<h2> Contact Number2 </h2>  <input type="text" name="num2" > <br>
        	<input type="submit" name="Add Event" placeholder="submit"> 
         </form>
		
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

