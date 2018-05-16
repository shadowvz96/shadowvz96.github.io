<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="Hack, Javascript, Battle, Multiplayer, Javascript hacking, Game">
		<title>HackM3!</title>		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		
<style>
body {margin:0;}

.navbar {
font-family: Courier, Courier, serif;
  overflow: hidden;
  background-color: #e1e1e1;
  position: relative;
  top: 0;
  width: 100%;
}

.navbar a {
font-family: Courier, Courier, serif;
  float: left;
  display: block;
  color: #000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #df4040;
  color: white;
}


.navbar a:hover:not(.active) {
    background-color: #df4040;
    color: white;
}

.active {
    background-color: #00ff00;
}





.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
		
		
		
		
		
		
	</head>
	<body>
		
<div class="navbar">
  <a class = "active" href="index.php">Home</a>
  <a href="#chat">Chat</a>
  <a href="#leader">Leaderboards</a>
  <a style ="float:right" href="#login">Login</a>
  <a style ="float:right" href="register.php">Register</a>
</div>	
		
	
	

	
	
	
	<!-- Banner -->
			<section id="banner">
				<p><img src="images/haxm3img.png" width="250" height="200"></p>
    			<h2><strong>HackM3!</strong> is a multiplayer game. 
				</br>
				<img src="images/group.png" width="125" height="100"></h2>
				
    			<h2><strong>Play</strong> as a hacker!
				</br>
				<img src="images/hacker.png" width="125" height="130"></h2>
				
    			<h2><strong>Battle</strong> your friends!
				</br>
				<img src="images/sword.png" width="125" height="100"></h2> 
				
				<p>Brought to you by <strong>Christopher Viquez</strong></p>
				<ul class="actions">
					<li><a href="playnow.php" class="button special">Play Now!</a></li>
					
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>More information</h2>
					</header>
					<div class="features">
						<div class="feature">
							<img src="images/chat.png" width="90" height="90"></h2>
							<h3><strong><u>Chat Lobby</u></strong></h3>
							<p>Invite your friends to play by clicking their name! Chat with them about whatever you want!</p>
						</div>
						<div class="feature">
							<img src="images/world.png" width="90" height="90"></h2>
							<h3><strong><u>Play Online</u></strong></h3>
							<p>Play with anyone at anytime, anywhere!</p>
						</div>
						<div class="feature">
							<img src="images/level-up.png" width="90" height="90"></h2>
							<h3><strong><u>Level Up!</u></strong></h3>
							<p>Earn experience points points and climb the ladder to reach the top of the leaderboards!</p>
						</div>
						<div class="feature">
							<img src="images/complayer.png" width="90" height="90"></h2>
							<h3><strong><u>Practice against Computer</u></strong></h3>
							<p>Test your skills against random Computers! Beware, they are powerful!</p>
						</div>
						<div class="feature">
							<img src="images/email.png" width="90" height="90"></h2>
							<h3><strong><u>Contact Support</u></strong></h3>
							<br/>
							<p>Ask any questions or report any bugs!</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2><strong><u>Get in touch</u></strong></h2>
					</header>
					<p><strong>Submit your Name, Email address, and any questions, comments or concerns. I should get back to you within 24 hours!</strong></p>
					<form class="grid-form" method="post" action="#">
						<div class="form-control narrow">
							<label for="name">Name</label>
							<input name="name" id="name" type="text">
						</div>
						<div class="form-control narrow">
							<label for="email">Email</label>
							<input name="email" id="email" type="email">
						</div>
						<div class="form-control">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
						<ul class="actions">
							<li><a href="playnow.php" class="button special">Send Message</a></li>
						</ul>
					</form>
				</div>
			</section>



		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; Viquezinc. , 2018 </a>.
					<br/>
					<img src="images/viquezinc.png" width = "100" height = "100">
				</div>
			</footer>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>
	</body>
</html>

