<?php
/**
 * Created by PhpStorm.
 * User: sulav
 * Date: 9/11/2018
 * Time: 3:12 PM
 */


echo "Already Registered?? Log In Here!!";

if(isset($_SESSION['name']))
{
    header('Location:teachersdata.php');
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
        header('Location:teachersdata.php');
    }
    else
    {
        echo "Error: Invalid Login";
    }

}

//echo "Already Registered??"."<a herf> Log In Here!!";

?>

<form action="teachersdata.php" method="POST">
    <b>Teacher Name:</b><br>
    <input type="text" name="name">
    <br><br>
    <b>Password:</b><br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" name="submit" value="Log In">
</form>


<?
echo "Register Now"; ?>
<form action="teachersregistration.php" method="POST">
    <input type="submit" name="register" value="Register">
</form>
<?php

if(isset($_POST['register']))
{
    header('Location:teacherregisstration.php');
    exit();
}
?>

