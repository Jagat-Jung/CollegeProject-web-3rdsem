<?php 
$id = $_GET['id'];
echo $id;
?>
<html>
<head>
<title>Register</title>
    <link rel="stylesheet" type="text/css" href="stylesupdate.css">
<body>
    <div class="log">
    <img src="logo.png" class="logo">
        <h1>LOG-IN SUCESSFULL</h1>
        <form action="updateuser.php" method="post">
            <p>First Name</p>
            <input type="text" name="fname" placeholder="Enter New Your First Name">
            <p>Last Name</p>
            <input type="text" name="lname" placeholder="Enter New Your Last Name">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter New Your Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter New Password">
            <input type="submit" class="btn" value="Update">
              <input type="hidden" name="id" value="<?php echo $id;?>">
            </form>
            <form action="delete.php" method="post" align="center">
                <input type="submit" value="Delete"></button>
                <input type="hidden" name="id" value="<?php echo $id;?>">
            </form>
            
            
        </form>
        
    </div>

</body>
</head>
</html>