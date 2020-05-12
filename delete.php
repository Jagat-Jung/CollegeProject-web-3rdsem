<?php
include('hci.php');
if(!isset($_POST['id']))
{
    die("  Delete Sucessful");
}
if($_POST['id']=="")
{
    die("invalid id");
}

$id=$_POST['id'];
$sql="DELETE FROM hci WHERE id='$id'";
$result=mysqli_query($con,$sql);
    if($result)
    {
        echo "  Delete Sucessful";
        header("Location:delete.php");
    }
    else
    {
        die(mysqli_error());
    }
