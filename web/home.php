<?php
	require_once("includes/connect.php");
	include("includes/navbar.html");
?>
<html>
<head>
	<title>MovieDb Home</title>
	<link rel="stylesheet" href="css/main.css"/>
</head>

<body class="background">

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


