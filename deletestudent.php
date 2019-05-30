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

$id_ = $_GET['st'];
$sql="DELETE FROM students WHERE id=$id_";

if (mysqli_query($connect, $sql))
{
    echo "Record deleted";
}
else
{
    echo "Error deleting record".mysqli_error($connect);
}

