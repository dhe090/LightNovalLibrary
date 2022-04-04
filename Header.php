<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>headerfile</title>
	<link rel="stylesheet" type="text/css" href="library.css">

</head>
<body>
<div class="top">
	<div class="logo"> <a href="Read_Me.html">LNL</a> </div>
	<div class="wel">LightNovelMultiLanguage Library<br>
	                 Loading!!!</div>
	<div id="time">
		<form name="record" method="post" action="">
			Reading Time:
			<input name="area" type="text" value="">
		</form>
	</div>
	<div class="detail">
		<ul>
			<li><a href="#">Language<span class="icon"></span></a>
				<ul>
					<li><a href="#">chinese</a></li>
					<li><a href="#">English</a></li>
				</ul>
			</li>
			<li><a href="personalprofilepage.php">Personal Page</a>
			</li>
			<li><a href="post.php">Post new topic</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<!--top-->
<div id="nav">
	<div id="mulu">
		<ul>
			<li><a href="LibraryMainPage.html">Main Page</a></li>
			<li><a href="LibraryMainPage.html#goal">About Us</a></li>
			<li><a href="#" onClick="f1()">Daily Recommandation</a></li>
			<li><a href="#">LibNavigation<span class="icon"></span></a>
				<ul class="list1">
					<li><a href="#">Help</a></li>
					<li><a href="#">Report Error</a></li>
				</ul>
			</li>
			<li><a href="#">New Event</a></li>
			<li><a href="#">Covid-19 Donation</a></li>
            <?php
            session_start();
            if(!isset($_SESSION['userName']))
            {
                echo '<li><a href="LibraryMainPage.html#login">Login</a></li>';
            }
            else
            {
                echo '<li><a href="logout.php">Logout</a></li>';
            }
            ?>
		</ul>
	</div> <!--mulu-->
</div>


</body>
</html>