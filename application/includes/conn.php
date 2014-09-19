<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'blog_master';

/*** mysql password ***/
$password = 'blog_password';

/*** connect to the database ***/
$link = @mysql_connect($hostname, $username, $password);

/*** select the database ***/
$db = mysql_select_db('blog', $link);

?>