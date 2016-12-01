<?php
	require_once("includes/connect.php");
	include("includes/navbar.html");	
?>

<html>
<head>
	<title>MovieDb List</title>
	<link rel="stylesheet" href="css/list.css"/>
</head>

<body class="background">
	<div>
	<ul class="sort">
		<li><a href="movielist.php">Meta Critic Score</a></li>
		<li><a href="movielist.php">Rotten Tomatoes Tomatometer</a></li>
		<li><a href="movielist.php">IMDb Rating</a></li>
		<li><a href="movielist.php">Director(s)</a></li>
		<li><a href="movielist.php">Release Date</a></li>
		<li><a href="movielist.php">Movie Title</a></li>
	</ul> 
</div>

	<h1>All Movies</h1>

	<?php 
		$movies = "SELECT A.*, B.Rating, C.Tomatometer, D.Metascore
					FROM movies A
					LEFT JOIN imdb B ON B.Title = A.Title
					LEFT JOIN rottentomatoes C ON C.Title = A.Title
					LEFT JOIN metacritic D ON D.Title = A.Title";

		if ($films = mysql_query($movies));
		{
			while($movie = mysql_fetch_array($films))
			{
				print "<hr>";
				print "<div class='movie'>";
				print "<img src='{$movie['PosterLink']}'  alt='Movie Poster'>";
				print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				print "<span>{$movie['Title']}";
				print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				print "{$movie['ReleaseDate']}";
				print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				print "{$movie['Directors']}";
				print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				print "IMDb: {$movie['Rating']}";
				print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				print "Tomatometer: {$movie['Tomatometer']}";
				print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				print "Meta score: {$movie['Metascore']}";
				print "</span></div>";
			}
		}
	?>
</body>
</html>

