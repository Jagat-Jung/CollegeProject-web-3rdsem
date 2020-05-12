<?php
	
	/*connected to webserver*/
	$host='localhost:3306';

	/*connection to thew server haie guyz*/
	$con=mysqli_connect($host,'root','','bca');

	if($con)
	{
		echo "sucessfully connected";
	}
	else
	{
		dis(mysqli_connect_error);
	}

	/*check connction
	if(mysqli_connect_error())
	{
		printf("connection failed %n",mysqli_connect_error());
		exit();
	}*/
	
	

