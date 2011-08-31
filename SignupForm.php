<html>

<title>highfive</title>

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
		<h3>Sign Up</h3>
		
			<?php
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$to = 'michael.greenspan@sandisk.com';
				$subject = 'login information';
				
						
				
				
				
				
			<font size=1>By clicking "Submit", you are agreeing to the <a href="highfive.com/termsofservice">Terms of Service</a>.</font>
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <br /> <br /><br /><br />
		</div>
</body>

</html>
