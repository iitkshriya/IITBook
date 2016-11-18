<?php

	if(!isset($_COOKIE)){
    	echo "<h1>You are not logged in.</h1>";
	die();
    }
    $name = $_COOKIE['user'];
    echo"You are logged in as ".$_COOKIE['user']."!";
	
	echo "<image src='images/".sha1($_COOKIE['user'])."'>"
	
	?>