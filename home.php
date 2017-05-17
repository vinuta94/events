<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Management Website </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">EVENT MANAGEMENT SYSTEM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="login.html">Sign In</a></li>
      <li><a href="register.html">Sign Up</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
	

  <img src="images/concert-audience.jpg" width=50% alt="image">
	<div class="col-md-6 w3-event-right">
				    <h5>16 MAY 2017</h5>
					<h3><a href="#" data-toggle="modal" data-target="#myModal">MUSIC CONCERT</a></h3>
					<blockquote>This type of concert consists of musicians playing percussion and wind instruments, but other types of instruments may be added depending on the music piece. Concert bands are also called wind ensembles, wind bands, symphonic bands, etc. The repertoire varies; from classical to contemporary music. 
						<span>There are also different types of concert bands such as school bands and community bands.
					</span> 
					</blockquote>
	</div>
	
	<a href="login.html?id=<?php echo $_SESSION['id'];?>">BOOK TICKETS</a>
</div>
	<br>
	
	<div class="container">
 
  <img src="images/movie-reel.jpg" width=50% alt="image">
		<div class="col-md-6 w3-event-right">
				    <h5>16 MAY 2017</h5>
					<h3><a href="#" data-toggle="modal" data-target="#myModal">CINEMA</a></h3>
					<blockquote>This type of concert consists of musicians playing percussion and wind instruments, but other types of instruments may be added depending on the music piece. Concert bands are also called wind ensembles, wind bands, symphonic bands, etc. The repertoire varies; from classical to contemporary music. 
						<span>There are also different types of concert bands such as school bands and community bands.
					</span> 
					</blockquote>
			<a href="login.html">BOOK TICKETS</a>
	
</div>
	<br>
	<div class="container">
 
  <img src="images/drama.png" width=50% alt="image">
		<div class="col-md-6 w3-event-right">
				    <h5>16 MAY 2017</h5>
					<h3><a href="#" data-toggle="modal" data-target="#myModal">DRAMA</a></h3>
					<blockquote>The Drama Club is dedicated to bringing the joy and power of Drama to students by providing high quality dramatic programming at the beginner and intermediate levels. It pledges to offer participants the chance to experience the excitement and rewards of theatre arts while developing poise, social skills, confidence and the ability to work with others. 
						
						<span>All members are introduced to both the theory and practice of drama as part of their programming. 
					</span> 
						
					</blockquote>
	</div>
	<a href="login.html">BOOK TICKETS</a>
	
</div>
</body>
</html>
