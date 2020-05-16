<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php 
	$databaseHost="localhost";
	$databaseUser="root";
	$databasePassword="";
	$databaseName="dream";
	$username=$_POST["uname"];
    $password=$_POST["psw"];
	$conn=mysqli_connect($databaseHost,$databaseUser,$databasePassword,$databaseName)or die("Connection error!");
	$res="select * from travel where Dtname='$username' && Password='$password'";
	$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from travel where Dtname='$username'  && Password='$password' "));
	$sql=mysqli_query($conn, $res);
	$r=mysqli_fetch_row($sql);
	if($r==TRUE)
	{
		if(mysqli_query($conn,$res))
		{
			echo "Welcome";
			echo $row["First_name"];
			echo "";
			echo $row["Surname"];
		}
	}?>
<table border=3 cellspacing=2 cellpadding=3>
	<tr>
		<th>First Name</th>	
		<td><?php echo $row["Name"]; ?></td>
	</tr>
	<tr>
		<th>Last Name</th>
		<td><?php echo $row["Surname"]; ?></td>
	</tr>
	<tr>
		<th>Email</th>
		<td><?php echo $row["Email"]; ?></td>
	</tr>
	<tr>
		<th>Dream Travel Name</th>
		<td><?php echo $row["Dtname"]; ?></td>
	</tr>
	<tr>
		<th>Contact</th>
		<td><?php echo $row["Contact"]; ?></td>
	</tr>
	
</table>
<!-- 	else{
		echo "Incorrect login Credentials";
		echo "Error: " . mysqli_error($conn);
	} -->
<br><br><button><a href="Login.html">Login</a></button>
<br><br><button><a href="home.html">Home</a></button>
</body>
</html>