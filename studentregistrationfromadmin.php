<?php
/**
 * Created by PhpStorm.
 * User: sulav
 * Date: 9/11/2018
 * Time: 10:36 PM
 */

session_start();

require ('Connection.php');

$data="CREATE TABLE students (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(25) NOT NULL,
Password VARCHAR(25) NOT NULL,
Fathername VARCHAR(25) NOT NULL,
DateOfBirth VARCHAR(25) NOT NULL,
Sex VARCHAR(25) NOT NULL,
EmailID VARCHAR(25) NOT NULL,
Faculty VARCHAR(25) NOT NULL,
Course VARCHAR(25) NOT NULL,
PermanentAddress VARCHAR(25) NOT NULL,
PinCode INT(5) NOT NULL,
MobileNo INT(10) NOT NULL
)";

if(mysqli_query($connect, $data))
{
    echo "<b>Table for students has been created successfully</b>";
}
else
{
    echo "<b>Error while creating table for students:</b> " .mysqli_error($connect);
}



if (isset($_POST['save']))
{
    $user=$_POST["name"];
    $pass=$_POST["password"];
    $fathername=$_POST["fathername"];
    $dob=$_POST["dob"];
    $sex=$_POST["sex"];
    $email=$_POST["email"];
    $faculty=$_POST["faculty"];
    $course=$_POST["course"];
    $paddress=$_POST["permanentaddress"];
    $pincode=$_POST["pincode"];
    $mobile=$_POST["mobileno"];

    if ($user!='' && $pass!='' && $fathername!='' && $dob!='' && $sex!='' && $email!='' && $faculty!='' && $course!='' && $paddress!='' && $pincode!='' && $mobile!='')
    {
        $query="INSERT INTO students (Username, Password, Fathername, DateOfBirth, Sex, EmailID, Faculty, COurse, PermanentAddress, PinCode, MobileNo) VALUES ('$user','$pass','$fathername','$dob','$sex','$email','$faculty','$course','$paddress','$pincode','$mobile')";
        $run_query = mysqli_query($connect, $query);
        if ($run_query == true)
        {
            header('Location:Admin.php');
            exit();
        }
        else
        {
            echo "<span style='color: #ff0505'><b>No data has been added</b><br>" . mysqli_error($connect) . "</span>";
        }
    }
    else
    {
        echo "<span style='color: #ff0505'>Fill up all fields first !!!</span>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
<center>
    <h1>Student Registration Form</h1>
    <form onsubmit="" action="#" method="POST">
        <b>UserName:</b>
        <input type="text" name="name">
        <br><br>
        <b>Password:</b>
        <input type="password" name="password">
        <br><br>
        <b>Father Name:</b>
        <input type="text" name="fathername">
        <br><br>
        <b>DOB:</b>
        <input type="text" name="dob">
        <br><br>
        <b>Sex:</b>
        <input type="radio" name="sex" value="Male">Male
        <input type="radio" name="sex" value="Female">Female
        <br><br>
        <b>Email Id:</b>
        <input type="email" name="email">
        <br><br>
        <b>Faculty:</b>
        <input type="text" name="faculty">
        <br><br>
        <b>Course:</b>
        <input type="text" name="course">
        <br><br>
        <b>Permanent Address:</b>
        <input type="text" name="permanentaddress">
        <br><br>
        <b>Pin Code:</b>
        <input type="text" name="pincode">
        <br><br>
        <b>Mobile No:</b>
        <input type="text" name="mobileno">
        <br><br>
        <input type="submit" name="save" value="Submit Form">
        <input  type="reset" name="reset" value="Reset">

    </form>

    <?
    if(isset($_POST['reset']))
        header('Location:studentregistrationfromadmin.php');
    exit();
    ?>
</center>
</body>
</html>
