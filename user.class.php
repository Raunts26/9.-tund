<?php

$user1 = new User("Kalle");
$user2 = new User("Mari");

class User {
	//user.class.php
	
	
	//See fn käivitub kui tekitame uue instantsi
	//new User()
	function __construct($name) {
		
			echo $name." <br>";
	}
	
} ?>