w<?php

include_once('../Kozos/fuggvenyek.php');

$toroltfizetes = $_POST["toroltfizetes"];

if ( isset($toroltfizetes) ) {
	
	$sikeres = fizetest_torol($toroltfizetes);
	
	if ( $sikeres ) {
		header('Location: ../Kozos/adatok.php');
	} else {
		echo 'Hiba történt a törlés során';
	}
	
} else {
	echo 'Hiba történt a törlés során';
	
}

?>