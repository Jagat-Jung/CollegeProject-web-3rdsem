<?php
include('hci.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
     

    //insert data in database
    $sql="INSERT INTO hci(Fname,Lname,Email,password) VALUES('$fname','$lname','$email','$password')";
   // $sql.="VALUES('$fname','$lname','$email','$password')";
    $result=mysqli_query($con,$sql);
?>
<html>
<head>
<title>register sucessful</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <div class="log">
            <form action="home.php">
            </br></br></br>
                <h1>Congrats!!!<br> You Have Sucessfully Created a HCI Account</h1>
            <input type="submit" value="OK">
        </form>
            
     
        
    </div>

</body>
</head>
</html>