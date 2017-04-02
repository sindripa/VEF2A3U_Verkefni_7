<?php 
	//require_once('./connection.php');
	try {
		$sql = "select Netfang, AdgangsOrd, Nafn, IsAdmin FROM users";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
		$result = $pdo -> query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$User[] = array($row['Netfang'], $row['AdgangsOrd'], $row['Nafn'], $row['IsAdmin']);
	}

	$Username=isset($_SESSION['UserData']['Username']) ? $_SESSION['UserData']['Username'] : '';
	$Password=isset($_SESSION['UserData']['Password']) ? $_SESSION['UserData']['Password'] : '';
	$dataUser = [];

	foreach ($User as $k)
	{
    	if ($k[0] == $Username && password_verify($Password, $k[1])) { $dataUser[] = $k[0]; $dataUser[] = $k[1]; $dataUser[] = $k[2]; $dataUser[] = $k[3]; break;}
    }
 ?>