<html>
<head>

<title>
 Connecting to the MySQL Server Using PHP
</title>
</head>

<body>
<?php

//Address error handling

ini_set('display_errors', 1);
error_reporting(E_ALL & E_NOTICE);

//Attempt to connect

if($connection=@mysql_connect('localhost', 'mjohnson23', 'mjohnson23')){
}else{
	die('<p>Could not connect to MySQL because:<b>'.mysql_error().'</b></p>');
}
if(@mysql_select_db("mjohnson23DB", $connection)){
}else{
	die('<p>Could not select the tshay1DB database because:<b>'.mysql_error().'</b></p>');
}
$query="SELECT *
FROM movies, jeremyjahns
WHERE jeremyjahns.Title = movies.Title ";
if($r=mysql_query($query)){      
	while($row=mysql_fetch_array($r)){
		
		echo "<p>
			<img src= '{$row['PosterLink']}' alt='Movie Poster'style='width:304px;height:228px;'>
                <p>Title:
                {$row['Title']}</p> 
                <p>Release Date:
                {$row['ReleaseDate']}</p>
                <p>Rating:
                {$row['Rating']}</p>
                <p>Youtube Link:
		        {$row['YouTubeLink']}</p> </p><br>";
	}
}
?>
</body>
</html>
