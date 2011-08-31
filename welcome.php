<html>

<title>welcome to highfive</title>

<head>
	<a href="http://localhost:8888/highfive.php"><img src="highfivelogo.jpeg" alt="highfive logo" /></a>
	
	<div id="LinksOnTop">
	<a href="http://localhost:8888/highfive.php">Highfive</a> | <a href="http://localhost:8888/newsfeed.php">News Feed</a> | <a href="http://localhost:8888/profile.php">Profile</a> | <a href="http://localhost:8888/help.php">Help</a>
	</div>
	<hr>
	<link rel="stylesheet" href="highfive.css" />
</head>


<body>
	<!--This is a list of all of the variables used on this page-->
	<?php
		$txt="Hello World!";
		$x=16;
		?>
	
	
<div class=".MiddlePanel">
	Welcome to highfive, <?php echo $_POST["fname"]; ?>!<br><br>
	
</div>
</body>
</html>