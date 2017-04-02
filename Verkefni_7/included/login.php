<?php session_start();

	require_once("connection.php");
	include("query.php");

	$Username=isset($_POST['Username']) ? $_POST['Username'] : '';
	$Password=isset($_POST['Password']) ? $_POST['Password'] : '';

	if(isset($_POST['Submit']))
	{
		foreach ($users as $k)
		{
        	if ($k[0] == $Username && password_verify($Password, $k[1])){$logins = [$k[0] => $k[1]];break;}
        }
		if(isset($logins[$Username])&&password_verify($Password, $logins[$Username]))
		{
			$_SESSION['UserData']['Username']=$Username;
			$_SESSION['UserData']['Password']=$logins[$Username];header("location:../index.php");exit;
		}
	}
 ?>
 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login/Register</title>
		<link rel="stylesheet" type="text/css" href="../DropDead.css">
		<meta name="viewport" content="width=device-width">
	</head>
	<body id="Login">

		<form action="" method="post" name="Innskra">
			<h1>Login</h1>

			<input class="formInput" name="Username" type="text" class="Input" placeholder="Email">
			<input class="formInput" name="Password" type="password" class="Input" placeholder="Password">
			<input class="formInput" name="Submit" type="submit" value="Login" class="Button3">
		</form>

		<form action="insert.php" method="post" Name="Register">
			<h1>Register</h1>
			<input class="formInput" type="text" name="RegisterName" placeholder="Name">
			<input class="formInput" type="text" name="RegisterUsername" placeholder="Email" required >
			<input class="formInput" type="password" name="RegisterPassword" placeholder="Password" required >
			<input class="formInput" name="RegisterSubmit" type="submit" value="Register" class="Button3">
		</form> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js.js"></script>
	</body>
</html>