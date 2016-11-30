<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL & E_NOTICE);

	if($connection=@mysql_connect('localhost', 'whoffman1', 'whoffman1'))
	{
	}
	else
	{
		die('<p>Could not connect to MySQL because:<b>'.mysql_error().'</b></p>');
	}
	if(@mysql_select_db("whoffman1DB", $connection))
	{
	}
	else
	{
		die('<p>Could not select the whoffman11DB database because:<b>'.mysql_error().'</b></p>');
	}
?>