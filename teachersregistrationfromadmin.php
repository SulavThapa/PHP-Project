<!DOCTYPE html>
<html>
<head>
    <title>Teacher Registration Form</title>
</head>
<body>
<center>
    <h1>Teacher Registration Form</h1>
    <form onsubmit="" action="#" method="POST">
        <b>UserName:</b>
        <input type="text" name="name">
        <br><br>
        <b>Password:</b>
        <input type="password" name="password">
        <br><br>
        <b>Father Name:</b>
        <input type="text" name="fname">
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
        <b>Department:</b>
        <input type="text" name="dep">
        <br><br>
        <b>Module:</b>
        <input type="text" name="module">
        <br><br>
        <b>Salary:</b>
        <input type="text" name="salary">
        <br><br>
        <b>Permanent Address:</b>
        <input type="text" name="permanentaddress">
        <br><br>
        <b>City</b>
        <b>Pin Code:</b>
        <input type="text" name="pincode">
        <br><br>
        <b>Mobile No:</b>
        <input type="text" name="mobileno">
        <br><br>
        <button type="submit" name="save">save</button>
        <button type="reset" name="reset">reset</button>
    </form>

    <?
    if(isset($_POST['reset']))
        header('Location:teachersregistration.php');
    exit();
    ?>
</center>
</body>
</html>



<?php

session_start();

require('Connection.php');

$data="CREATE TABLE teachers(
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(25) NOT NULL,
Password VARCHAR(25) NOT NULL,
Fathername VARCHAR(25) NOT NULL,
DateOfBirth VARCHAR(25) NOT NULL,
Sex VARCHAR(25) NOT NULL,
EmailID VARCHAR(25) NOT NULL,
DepartmentName VARCHAR(25) NOT NULL,
Module VARCHAR(25) NOT NULL,
Salary INT(6) NOT NULL,
PermanentAddress VARCHAR(25) NOT NULL,
CityPinCode VARCHAR(25) NOT NULL,
MobileNo VARCHAR(25) NOT NULL
)";


if(mysqli_query($connect, $data))
{
    echo "<b>Table for teachers has been created successfully</b>";
}
else
{
    echo "<b>Error while creating table for teachers:</b>" .mysqli_error($connect);
}


if (isset($_POST['save']))
{
    $user=$_POST["name"];
    $pass=$_POST["password"];
    $fathername=$_POST["fname"];
    $dob=$_POST["dob"];
    $sex=$_POST["sex"];
    $email=$_POST["email"];
    $dep=$_POST["dep"];
    $module=$_POST["module"];
    $salary=$_POST["salary"];
    $paddress=$_POST["permanentaddress"];
    $pincode=$_POST["pincode"];
    $mobile=$_POST["mobileno"];

    if ($user!='' && $pass!='' && $fathername!='' && $dob!='' && $sex!='' && $email!='' && $dep!='' && $module!='' && $salary!='' && $paddress!='' && $pincode!='' && $module!='')
    {
        $query= "INSERT INTO teachers(Username, Password, Fathername, DateOfBirth, Sex, EmailID, DepartmentName, Module, Salary, PermanentAddress, CityPinCode, MobileNo)VALUES('$user','$pass','$fathername','$dob','$email','$sex','$dep','$module','$salary','$paddress','$pincode','$mobile')";

        $run_query=mysqli_query($connect, $query);

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








