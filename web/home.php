<?php
	require_once("includes/connect.php");
?>
<html>
<head>

<title>
MovieDb Home
</title>
<link rel="stylesheet" href="css/main.css"/>
</head>

<body class="background">
<div>
	<ul class="menu">
		<li><a href="home.php">Home</a></li>
		<li><a href="jeremyjahns.php">Jeremy Jahns</a></li>
		<li><a href="schmoesknow.php">Schmoes Know</a></li>
		<li><a href="whattheflick.php">What The Flick</a></li>
	</ul> 
</div>

<h1>
	Movie YouTube Database
</h1>

<?php
	$topFour = "SELECT * FROM movies ORDER BY ReleaseDate DESC LIMIT 4";

	if ($four = mysql_query($topFour));
	{
		print "<table id='posters'><tr>";
		while($movie = mysql_fetch_array($four))
		{
			print "<td><table id='posters'>";
			print "<th colspan= 1>{$movie['Title']}</th>";
			print "<tr><td> Release Date: {$movie['ReleaseDate']}</td></tr>";
			print "<tr><td><img src='{$movie['PosterLink']}' class='poster' alt='Movie Poster'></td></tr>";
			print "<tr><td>Director(s): {$movie['Directors']}</td></tr>";
			print "<tr><td>Stars: {$movie['LeadActor1']}, {$movie['LeadActor2']}, {$movie['LeadActor3']}</td></tr>";
			print "</table></td>";
		}
		print "</tr></table>";
	}
	
?>
</body>
</html>


