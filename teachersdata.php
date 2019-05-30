<?php
/**
 * Created by PhpStorm.
 * User: sulav
 * Date: 9/14/2018
 * Time: 7:37 AM
 */

session_start();

require ('Connection.php');

$name=$_POST['name'];

$ps=$_POST['password'];

$data= "SELECT * FROM teachers where Username='$name' and Password='$ps'";
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
    echo "<th>Department Name</th>";
    echo "<th>Module</th>";
    echo "<th>Salary</th>";
    echo "<th>PermanentAddress</th>";
    echo "<th>PinCode</th>";
    echo "<th>Mobile</th>";
    echo "<th>Update</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($result)) {
        $tid=$row['id'];
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Username'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Fathername'] . "</td>";
        echo "<td>" . $row['DateOfBirth'] . "</td>";
        echo "<td>" . $row['Sex'] . "</td>";
        echo "<td>" . $row['EmailID'] . "</td>";
        echo "<td>" . $row['DepartmentName'] . "</td>";
        echo "<td>" . $row['Module'] . "</td>";
        echo "<td>" . $row['Salary'] . "</td>";
        echo "<td>" . $row['PermanentAddress'] . "</td>";
        echo "<td>" . $row['PinCode'] . "</td>";
        echo "<td>" . $row['MobileNo'] . "</td>";
        echo "<td><a href='personalteacherupdate.php?tt=$tid'>Update</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}
else
{
    echo "NO records found";
}
