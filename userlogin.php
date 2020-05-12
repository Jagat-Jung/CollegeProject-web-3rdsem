<?php
include('hci.php');
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from hci where Email='$email'";
$result=mysqli_query($con,$sql);
if($result){
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_array($result);
		$db_pass=$row['password'];
		if($db_pass==$password){
			echo "logged in sucessfully";
			$id=$row['id'];
			$update="update.php?id=".$id;
			echo'<a href="'.$update.'">Update</a>';
		}else{
			echo"Invalid password";
		}
	}else
	{
		echo"user not registered";
	}
}else{
	die(mysqli_connect_error());
}
exit();