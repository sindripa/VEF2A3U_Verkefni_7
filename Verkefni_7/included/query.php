<?php 
	try {
		$sql = "select Netfang, AdgangsOrd FROM users";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$users[] = array($row['Netfang'], $row['AdgangsOrd']);
	}
 ?>