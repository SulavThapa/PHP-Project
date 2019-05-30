<?php

$servername="localhost";
$username="root";
$password="";

//creating the connection
$connect=mysqli_connect($servername,$username,$password,"collegepotral");

//Checking the connection
if (!$connect)
{
	die("Connection failed: " .mysqli_connect_error());
}

//creating the database if the connection to the databse is successful
$data="CREATE DATABASE collegePotral";
if(mysqli_query($connect, $data))
{
	echo "Database has been created successfully.";
}
else
{
	echo "Error while creating databse: " .mysqli_error($connect);
}

//mysqli_close($connect);

?>