<?php
	require_once("includes/connect.php");
	include("includes/navbar.html");	
?>

<html>
<head>
	<title>Movie Search</title>
	<link rel="stylesheet" href="css/movie.css"/>
</head>

<body class="background">

	<h1> Movie Search </h1>

	<form method="post">
		<input name="Title" type="text"/>
		<input type="submit" name="search" value="Search">
	</form>

	<?php
		if(isset($_POST['Title']) && isset($_POST['search']))
		{
			$search = $_POST['Title'];

			$movie = "SELECT A.*
						FROM movies A
						WHERE A.Title = '" . mysql_real_escape_string($search) ."'";

			if ($film = mysql_query($movie));
			{
				while($info = mysql_fetch_array($film))
				{
					print "<h1>{$info['Title']}</h1>";
					print "<table id='t01'><tr><td align='center'><img src=" . $info['PosterLink'] . "width='150'; height='400'></td><td align='center'>Release Date: " . $info['ReleaseDate'] . "<br> Directors: " . $info['Directors'] . "<br> Lead Actors: " . $info['LeadActor1'] . ", " . $info['LeadActor2'] . ", " . $info['LeadActor3'] . "</td></tr></table>";

					$movie = "SELECT A.*
						FROM jeremyjahns A
						WHERE A.Title = '" . mysql_real_escape_string($search) ."'";

					if ($film = mysql_query($movie));
					{
						while($info = mysql_fetch_array($film))
						{
							print "<h1>Jeremy Jahns</h1>";
							print "<div><iframe src='{$info['YouTubeLink']}'>
							</iframe></div>";
							print "<h4>Rating: {$info['Rating']}</h4>";
						}
					}

					$movie = "SELECT A.*
						FROM schmoesknow A
						WHERE A.Title = '" . mysql_real_escape_string($search) ."'";

					if ($film = mysql_query($movie));
					{
						while($info = mysql_fetch_array($film))
						{
							print "<h1>Schmoes Know</h1>";
							print "<div><iframe src='{$info['YouTubeLink']}'>
							</iframe></div>";
							print "<h4>Kristian's Score: {$info['KristianScore']}  Mark's Score: {$info['MarkScore']}</h4>";
						}
					}

					$movie = "SELECT A.*
						FROM whattheflick A
						WHERE A.Title = '" . mysql_real_escape_string($search) ."'";

					if ($film = mysql_query($movie));
					{
						while($info = mysql_fetch_array($film))
						{
							print "<h1>What The Flick</h1>";
							print "<div><iframe src='{$info['YouTubeLink']}'>
							</iframe></div>";
							print "<h4>Score: {$info['Score']}</h4>";
						}
					}
				}
			}
		}
		else
		{

		}
	?>
	<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
