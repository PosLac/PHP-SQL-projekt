<?php

include_once('../Kozos/fuggvenyek.php');

$toroltdolgozo = $_POST["toroltdolgozo"];

if ( isset($toroltdolgozo) ) {
	
	$sikeres = dolgozot_torol($toroltdolgozo);
	
	if ( $sikeres ) {
		header('Location: ../Kozos/adatok.php');
	} else {
		echo 'Hiba történt a törlés során';
	}
	
} else {
	echo 'Hiba történt a törlés során';
	
}

?>