<?php
require ('Connection.php');
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['student_id'];

$sql="update students set Username='$username',Password='$password' where id='$id'";
if(mysqli_query($connect,$sql))
{
    header('location:Admin.php');
}
else
    {
    echo "error in set student";
}




?>