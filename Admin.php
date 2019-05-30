<?php
/**
 * Created by PhpStorm.
 * User: sulav
 * Date: 9/11/2018
 * Time: 3:12 PM
 */

session_start();

require ('Connection.php');


$data= "SELECT * FROM students";
$result= mysqli_query($connect, $data);

if (mysqli_num_rows($result) > 0)
{
    echo "<table style='border: solid'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>UserName</th>";
    echo "<th>Password</th>";
    echo "<th>FatherNme</th>";
    echo "<th>DateOfBirth</th>";
    echo "<th>Sex</th>";
    echo "<th>EmailID</th>";
    echo "<th>Faculty</th>";
    echo "<th>Course</th>";
    echo "<th>PermanentAddress</th>";
    echo "<th>PinCode</th>";
    echo "<th>Mobile</th>";
    echo "<th>Update</th>";
    echo "<th>Delete</th>";

    echo "</tr>";

    while ($row = mysqli_fetch_array($result))
    {
        $idd=$row['id'];
        echo "<tr>";
        echo "<td>" . $idd . "</td>";
        echo "<td>" . $row['Username'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Fathername'] . "</td>";
        echo "<td>" . $row['DateOfBirth'] . "</td>";
        echo "<td>" . $row['Sex'] . "</td>";
        echo "<td>" . $row['EmailID'] . "</td>";
        echo "<td>" . $row['Faculty'] . "</td>";
        echo "<td>" . $row['Course'] . "</td>";
        echo "<td>" . $row['PermanentAddress'] . "</td>";
        echo "<td>" . $row['PinCode'] . "</td>";
        echo "<td>" . $row['MobileNo'] . "</td>";
        echo "<td><a href='updatestudent.php?st=$idd'>Update</a></td>";
        echo "<td><a href='deletestudent.php?st=$idd'> Delete</a></td>";
        echo "</tr>";
    }

    echo "<td><a href='studentregistrationfromadmin.php'> Add</a></td>";

    echo "</table>";
    mysqli_free_result($result);
}
else
{
    echo "NO records found";
}


//if(isset($_POST['delete'])) {
//
//    $id_ = $_POST['id'];
//
//    $x = "DELETE FROM students WHERE id=$id_";
//
//    $retval = mysqli_query($x, $connect);
//
//    if (!$retval) {
//        die('Could not delete data: ');
//    }
//
//    echo "Deleted data successfully\n";
//
//
//}


?>

<?php


$data_= "SELECT * FROM teachers";
$result_= mysqli_query($connect, $data_);

if (mysqli_num_rows($result_) > 0)
{

    echo "<table style='border: solid'>";
    echo "<tr style='border: solid'>";
    echo "<th style='border: solid'>ID</th>";
    echo "<th>UserName</th>";
    echo "<th>Password</th>";
    echo "<th>FatherNme</th>";
    echo "<th>DateOfBirth</th>";
    echo "<th>Sex</th>";
    echo "<th>EmailID</th>";
    echo "<th>Department Name</th>";
    echo "<th>Module</th>";
    echo "<th>Salary</th>";
    echo "<th>PermanentAddress</th>";
    echo "<th>PinCode</th>";
    echo "<th>Mobile</th>";
    echo "<th>Update</th>";
    echo "<th>Delete</th>";
    echo "</tr>";

    while ($row_ = mysqli_fetch_array($result_)) {
        $tid=$row_['id'];
        echo "<tr>";
        echo "<td>" . $tid . "</td>";
        echo "<td>" . $row_['Username'] . "</td>";
        echo "<td>" . $row_['Password'] . "</td>";
        echo "<td>" . $row_['Fathername'] . "</td>";
        echo "<td>" . $row_['DateOfBirth'] . "</td>";
        echo "<td>" . $row_['Sex'] . "</td>";
        echo "<td>" . $row_['EmailID'] . "</td>";
        echo "<td>" . $row_['DepartmentName'] . "</td>";
        echo "<td>" . $row_['Module'] . "</td>";
        echo "<td>" . $row_['Salary'] . "</td>";
        echo "<td>" . $row_['PermanentAddress'] . "</td>";
        echo "<td>" . $row_['PinCode'] . "</td>";
        echo "<td>" . $row_['MobileNo'] . "</td>";
        echo "<td><a href='updateteacher.php?tt=$tid'>Update</a></td>";
        echo "<td><a href='deleteteacher.php?tt=$tid'> Delete</a></td>";
        echo "</tr>";
    }

    echo "<td><a href='teachersregistrationfromadmin.php'> Add</a></td>";


    echo "</table>";
    mysqli_free_result($result_);
}
else
{
    echo "NO records found";
}


?>

<?php

?>
