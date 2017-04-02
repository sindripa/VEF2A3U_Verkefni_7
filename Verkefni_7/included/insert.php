<meta charset="utf-8"> <!-- fyrir íslensk stafamengi -->
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="../DropDead.css">

<?php
require_once("connection.php");
include("query.php");

$Usernafn = $_POST['RegisterUsername'];
if (!empty($_POST['RegisterName'])) {
	$NafnidANotanda = $_POST['RegisterName'];
}
else {
	$NafnidANotanda = $Usernafn;
}
$PassordUnhashed = $_POST['RegisterPassword'];
$Passord = password_hash($PassordUnhashed, PASSWORD_DEFAULT);
$Teljari = 0;
$Tjekk = 0;

foreach ($users as $k)
{
	if ($k[0] != $Usernafn){$Teljari++;}
	elseif ($k[0] == $Usernafn){$Teljari = 0;}
	if ($Teljari == 0){$Tjekk = 1;break;}
}

	


if(!empty($Usernafn) && !empty($Passord) && $Tjekk != 1)
{
	$sql = 'INSERT INTO users(Netfang, AdgangsOrd, Nafn, IsAdmin)VALUES(:Usernafn,:Passord,:NafnidANotanda,0)'; 
	
	$q = $pdo->prepare($sql);

	try{
		$q->bindValue(':NafnidANotanda',$NafnidANotanda);
		$q->bindValue(':Usernafn',$Usernafn); 
		$q->bindValue(':Passord',$Passord);

		$q->execute();  
		echo "Það tókst að skrifa eftirfarandi upplýsingar í gagnagrunn<br>";
		echo "Netfang: $Usernafn og AdgangsOrd: $PassordUnhashed og Nafn: $NafnidANotanda";
		echo("<br><a href='login.php'>Til baka</a>");
	}
	//
	catch (PDOException $ex){
		echo 'Það tókst ekki að skrifa í gagnagrunn: '.$ex->getMessage();
		echo("<br><a href='login.php'>Til baka</a>");
	}

}
elseif ($Tjekk == 1)
{
	echo 'Það tókst ekki að skrifa í gagnagrunn. Email nú þegar í notkun.';
	echo("<br><a href='login.php'>Til baka</a>");
}
else
{
	echo 'Það tókst ekki að skrifa í gagnagrunn.';
	echo("<br><a href='login.php'>Til baka</a>");
}
?>