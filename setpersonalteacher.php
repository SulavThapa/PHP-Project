<?php
require ('Connection.php');
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['teacher_id'];

$sql="update teachers set Username='$username',Password='$password' where id='$id'";
if(mysqli_query($connect,$sql))
{
    header('location:teachersdata.php');
}
else
{
    echo "error in set teachers";
}




?>