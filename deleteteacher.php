<?php
/**
 * Created by PhpStorm.
 * User: sulav
 * Date: 9/14/2018
 * Time: 1:20 PM
 */

session_start();

require ('Connection.php');
////if(! $retval ) {
//    die('Could not delete data: ' . mysql_error());
//}

//echo "Deleted data successfully\n";

$id= $_GET['tt'];
$sql="DELETE FROM teachers WHERE id=$id ";

if (mysqli_query($connect, $sql))
{
    echo "Record deleted";
    header('Location:Admin.php');
}
else
{
    echo "Error deleting record".mysqli_error($connect);
}

