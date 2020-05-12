<?php
include('hci.php');
$id=$_POST['id'];
$name=$_POST['fname'];
$last=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="UPDATE hci SET fname='$name', lname='$last', email='$email', password='$password' WHERE id='$id'";
global $con;
$result=mysqli_query($con,$sql);
?>
<html>
<head>
<title>Update Sucessfull sucessful</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <div class="log">
            <form action="home.php">
            </br></br></br>
                <h1>Congrats!!!<br> Your Update is Sucessfull</h1>
            <input type="submit" value="OK">
        </form>
            
     
        
    </div>

</body>
</head>
</html>
	