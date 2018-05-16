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
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/sliderStyle.css">
		<link href="stylesChess.css" rel="stylesheet" type="text/css">
		<script type="text/javascript"> if (!window.console) console = {log: function() {}}; </script>
		
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
	
	<?php include 'php_pages/loginFormRegMod.php'; ?>	
	
	
		
<div class="navbar">
  <a class = "active" href="index.php">Home</a>
  <a href="#chat">Chat</a>
  <a href="#leader">Leaderboards</a>
  <a style ="float:right" href="#login">Login</a>
  <a style ="float:right" href="#leader">Register</a>
</div>	
		
<!--This div not outputted but needed to work  -->	
		<?php include 'php_pages/notOutputted.php'; ?>	
		<!--   -->

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
			<script src="js/gui.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>		
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/buttons/loginlogout.js"></script>
		<script src="js/buttons/register.js"></script>
		<script src="js/defs.js"></script>
		<script src="js/io.js"></script>
		<script src="js/board.js"></script>
		<script src="js/movegen.js"></script>
		<script src="js/makemove.js"></script>
		<script src="js/perft.js"></script>
		<script src="js/evaluate.js"></script>
		<script src="js/pvtable.js"></script>
		<script src="js/search.js"></script>
		<script src="js/protocol.js"></script>
		<script src="js/gui.js"></script>
		<script src="js/main.js"></script>
		<script src="js/buttons/loadSaveGame.js"></script>
	</body>
</html>

