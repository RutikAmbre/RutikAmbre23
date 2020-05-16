<!DOCTYPE html>
<html>
<head>
	<title>Enquiry</title>
</head>
<body>
<?php 
$firstname=$_POST["FName"];
$lastname=$_POST["Surname"];
$email=$_POST["email"];
$contact=$_POST["Contact"];
$username=$_POST["dtname"];
$password=$_POST["psw"];
$databaseHost="localhost";
$databaseUser="root";
$databasePassword="";
$databaseName="dream";


$conn=mysqli_connect($databaseHost,$databaseUser,$databasePassword,$databaseName)or die("Connection error!");
$res="INSERT INTO travel(First_Name, Surname, Contact , Dtname , Password , Email ) VALUES ('$firstname','$lastname','$contact','$username',$password,'$email')";

if (mysqli_query($conn, $res)) {
    echo "Registration successful";
} else {
    echo "Error: " . $res . "<br>" . mysqli_error($conn);
}
 ?>

<br><br>
<br><br><button><a href="Login.html">Login</a></button>
<br><br><button><a href="home.html">Home</a></button>
</body>
</html>