<?php session_start();if(!isset($_SESSION['UserData']['Password'])){header("location:included/login.php");exit;}
require_once('./included/connection.php');
include('./included/query4.php');
$isAdmin = false;
if (!empty($dataUser[3]) && ($dataUser[3] == 1 || $dataUser == "1" || $dataUser == true)) {$isAdmin = true;}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verkefni 7</title>
	<link rel="stylesheet" type="text/css" href="DropDead.css">
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
	<style type="text/css">body{margin: 0 auto;text-align: center;}</style>
</head>
<body>
	<?php if ($isAdmin) { echo('<a href="./undirsidur/admin.php">Admin Page</a>'); } ?>
	<a href="./included/logout.php">Logout</a>
	<br><br><br><br>
	<h1>Good job. you made it to the actual site. if you're admin, you can go to the admin site up above.</h1> <!-- Yeah, I know... I could have done this better -->
</body>
</html>