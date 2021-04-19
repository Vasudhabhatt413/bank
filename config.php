<?php

   
    $conn = mysqli_connect('localhost','root','','ti');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
#	$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','vasudha','12345678@','malyaraaj-313537e38d');
?> 