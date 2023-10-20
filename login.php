<?php
//contains code showing how our loginsystem will work
session_start();
include "dbconnect";
$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];
//confirming our variables are not empty
if(empty($uname))
{
    header("location:index.php?error=User name is required!");
    exit();

}
else if(empty($pwd))
{
    header("Location:index.php?error=Fill in your password.");
    exit();
}
$sql="insert into users variables('$uname','$pwd')";
if($conn->query($sql)===true)
{
    echo"new records inserted";
}
else
{
    echo"Error";
}
$conn->close();
?>