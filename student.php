<?php
/**
 * Created by PhpStorm.
 * User: sulav
 * Date: 9/11/2018
 * Time: 3:12 PM
 */
session_start();

require ('Connection.php');

//$stu=("SELECT * FROM students WHERE Username={$_POST['Username']}");
//
//$pas=("SELECT * FROM students WHERE Password={$_POST['password']}");

//if (isset($_POST['submit']))
//{
//    $username=stripslashes($_REQUEST['name']);
//    $username=mysqli_real_escape_string($connect, $username);
//
//    $password=stripslashes($_REQUEST['password']);
//    $password=mysqli_real_escape_string($connect, $password);
//
//    $query="SELECT * FROM students WHERE name='$username' && password='$password'";
//
//    $result=mysqli_query($connect, $query);
//    $row=mysqli_num_rows($result);
//
//    if ($row > 0)
//    {
//        $_SESSION['name']=$username;
//
//        header('Location:studentdata.php');
//    }
//    else
//    {
//        echo "<h4>Username/password is incorrect</h4>";
//        echo "<br/>Click here to <a href='student.php'>Login</a>";
//    }
//
//}


if(isset($_SESSION['name']))
{
    header('Location:studentdata.php');
}

if (isset($_SESSION['name']))
{
    $user=$_POST['name'];
    $pass=$_POST['password'];

    $sql="SELECT * FROM students WHERE Username='$user' AND Password='$pass'";

    $re=mysqli_query($connect, $sql);

    if (mysqli_num_rows($re))
    {
        $_SESSION['name']=$user;
        $_SESSION['pass']=$pass;
        header('Location:studentdata.php');
    }
    else
    {
        echo "Error: Invalid Login";
    }

}

//echo "Already Registered??"."<a herf> Log In Here!!";

?>

<form action="studentdata.php" method="POST">
    <b>Student Name:</b><br>
    <input type="text" name="name">
    <br><br>
    <b>Password:</b><br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" name="submit" value="Log In">
</form>


<?
    echo "Register Now"; ?>
    <form action="studentregistration.php" method="POST">
        <input type="submit" name="register" value="Register">
    </form>
<?php

if(isset($_POST['register']))
{
    header('Location:studentregistration.php');
    exit();
    }
    ?>

