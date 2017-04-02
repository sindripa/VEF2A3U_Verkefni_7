<?php session_start();
require_once('../included/connection.php');
include('../included/query4.php');
if(!isset($_SESSION['UserData']['Username'])&&!isset($_SESSION['UserData']['Password'])&&($dataUser[3] == 0 || $dataUser == "0" || $dataUser == false)) {header("location:../included/login.php");exit;}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit User</title>
		<link rel="stylesheet" type="text/css" href="../DropDead.css">
		<meta name="viewport" content="width=device-width">
		<meta charset="utf-8">
	</head>
	<body>
		<div id="mainbodyB" class="mainbody">
			<div id="userFormContainer">
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="../js.js"></script>
	</body>
</html>