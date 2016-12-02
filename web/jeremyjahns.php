<?php
	require_once("includes/connect.php");
	include("includes/navbar.html");
?>

<html>

<head>
	<title> Connecting to the MySQL Server Using PHP </title>
	<link rel="stylesheet" href="css/main.css"/>
</head>

<style>
a:link
{
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:visited
{
    color: yellow;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    //color: red;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
</style>

<style>
table, th, td {
    border: 3px solid white;
    border-left: none;
    border-right: none;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
table#t01 {  
    background-color: none;
    color: white;
    width:50%; 
    margin-left:25%; 
    margin-right:25%;
}
</style>



<body class="background">
	<br>
	<?php
	$query="SELECT A.*, B.YouTubeLink, B.Rating FROM movies A, jeremyjahns B WHERE A.Title = B.Title;";
	if($r=mysql_query($query)){
		echo '<table id="t01"><tr><th>MOVIE</th><th>INFORMATION</th><th>Rating</th></tr>';
		while($row=mysql_fetch_array($r)){
			echo
				'<tr><td align="center">' . '<a href=' . $row['YouTubeLink'] . '>' . '<img src=' . $row['PosterLink'] . 'width="100"; height="300">' . '</a><br>'
				. '<a href=' . $row['YouTubeLink'] . '>' . $row['Title'] . '</a>'
				. '</td><td align="center"> Release Date: ' . $row['ReleaseDate']
				. '<br> Directors: ' . $row['Directors']
				. '<br> Lead Actors: ' . $row['LeadActor1'] . ', ' . $row['LeadActor2'] . ', ' . $row['LeadActor3']
				. '<br><a href=' . $row['YouTubeLink'] . '> YouTube Link</a>'
				. '</td><td>' . $row['Rating'] . ' </td></tr>';
		}
		echo "</table>";
	}
	?>

</body>
</html>
