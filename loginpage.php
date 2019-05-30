<?php
/**
 * Created by PhpStorm.
 * User: sulav
 * Date: 9/11/2018
 * Time: 2:55 PM
 */

$username=$_POST['name'];
$password=$_POST['password'];


if($username=="admin" && $password=="admin")
{
    header('Location:Admin.php');
    exit();
}

else if($username=="teacher" and $password=="teacher")
{
    header('Location:teachers.php');
    exit();
}

else if($username=="student" and $password=="student")
{
    header('Location:student.php');
    exit();
}

else
{
    header('Location:loginpage.php?password=password is wrong');
    exit();
}

?>



