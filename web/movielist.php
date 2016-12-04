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
		<li><form method="post"><input name="Title" type="submit" value="Movie Title"/></form></li>
		<li><form method="post"><input name="Date" type="submit" value="Release Date"/></form></li>
		<li><form method="post"><input name="Director" type="submit" value="Director(s)"/></form></li>
		<li><form method="post"><input name="Imdb" type="submit" value="IMDb Rating"/></form></li>
		<li><form method="post"><input name="Tomato" type="submit" value="Rotten Tomatoes Tomatometer"/></form></li>
		<li><form method="post"><input name="MetaScore" type="submit" value="Meta Critic Score"/></form></li>
		</form>
	</ul> 
</div>

	<h1>All Movies</h1>

	<?php 
		if (isset($_POST['Title']))
		{
        	$movies = "SELECT A.*, B.Rating, C.Tomatometer, D.Metascore
						FROM movies A
						LEFT JOIN imdb B ON B.Title = A.Title
						LEFT JOIN rottentomatoes C ON C.Title = A.Title
						LEFT JOIN metacritic D ON D.Title = A.Title
						ORDER BY A.Title ASC";

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
   		}
   		else if (isset($_POST['Date']))
		{
        	$movies = "SELECT A . * , B.Rating, C.Tomatometer, D.Metascore
							FROM movies A
							LEFT JOIN imdb B ON B.Title = A.Title
							LEFT JOIN rottentomatoes C ON C.Title = A.Title
							LEFT JOIN metacritic D ON D.Title = A.Title
							ORDER BY A.ReleaseDate DESC";

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
   		}
   		else if (isset($_POST['Director']))
		{
        	$movies = "SELECT A. * , B.Rating, C.Tomatometer, D.Metascore
							FROM movies A
							LEFT JOIN imdb B ON B.Title = A.Title
							LEFT JOIN rottentomatoes C ON C.Title = A.Title
							LEFT JOIN metacritic D ON D.Title = A.Title
							ORDER BY A.Directors ASC";

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
   		}
   		else if (isset($_POST['Imdb']))
		{
        	$movies = "SELECT A. * , B.Rating, C.Tomatometer, D.Metascore
							FROM movies A
							LEFT JOIN imdb B ON B.Title = A.Title
							LEFT JOIN rottentomatoes C ON C.Title = A.Title
							LEFT JOIN metacritic D ON D.Title = A.Title
							ORDER BY B.Rating DESC";

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
   		}
   		else if (isset($_POST['Tomato']))
		{
        	$movies = "SELECT A. * , B.Rating, C.Tomatometer, D.Metascore
							FROM movies A
							LEFT JOIN imdb B ON B.Title = A.Title
							LEFT JOIN rottentomatoes C ON C.Title = A.Title
							LEFT JOIN metacritic D ON D.Title = A.Title
							ORDER BY C.Tomatometer DESC";

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
   		}
   		else if (isset($_POST['MetaScore']))
		{
        	$movies = "SELECT A. * , B.Rating, C.Tomatometer, D.Metascore
							FROM movies A
							LEFT JOIN imdb B ON B.Title = A.Title
							LEFT JOIN rottentomatoes C ON C.Title = A.Title
							LEFT JOIN metacritic D ON D.Title = A.Title
							ORDER BY D.Metascore DESC";

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
   		}
    	else 
    	{
			$movies = "SELECT A.*, B.Rating, C.Tomatometer, D.Metascore
						FROM movies A
						LEFT JOIN imdb B ON B.Title = A.Title
						LEFT JOIN rottentomatoes C ON C.Title = A.Title
						LEFT JOIN metacritic D ON D.Title = A.Title
						ORDER BY A.Title ASC";

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
		}
?>
	<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>

