<html>

<title>sign up for highfive</title>

<head>
	<a href="http://localhost:8888/highfive.php"><img src="highfivelogo.jpeg" alt="highfive logo" /></a>
	
	<div id="LinksOnTop">
	<a href="http://localhost:8888/highfive.php">Highfive</a> | <a href="http://localhost:8888/newsfeed.php">News Feed</a> | <a href="http://localhost:8888/profile.php">Profile</a> | <a href="http://localhost:8888/help.php">Help</a>
	</div>
	<hr>
	<link rel="stylesheet" href="highfive.css" />
</head>

<body>
	<div class="MiddlePanel">
	
		<!--Submits all the information posted on this page and outputs it in welcome.php-->
		<form action="newsfeed.php" method="post">
		
			<!--Asks user to enter who they are recognizing-->
			Who do you want to recognize?: <input type="text" name="name" /><br />
		
			<!--Asks user to select what core value exemplified by the person they are recognizing-->
			What core value did they exemplify?: 
			<select name="corevalue">
			<option value="innovation">Innovation</option>
			<option value="teamwork">Teamwork</option>
			</select>
			<br />
					
			<!--Asks user to enter more information about action-->
			Tell us what they did!: <input type="text" name="action" /><br />
			
			<!--Renders a submit button-->
			<input type="Submit" /><br />
	</form>
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /> <br /><br /><br />
	</div>
</body>

</html>