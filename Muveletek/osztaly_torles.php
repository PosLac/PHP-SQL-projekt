<?php

include_once('../Kozos/fuggvenyek.php');

$toroltosztaly = $_POST["toroltosztaly"];

if ( isset($toroltosztaly) ) {
	
	$sikeres = osztalyt_torol($toroltosztaly);
	
	if ( $sikeres ) {
		header('Location: ../Kozos/adatok.php');
	} else {
		echo 'Hiba történt a törlés során';
	}
	
} else {
	echo 'Hiba történt a törlés során';
	
}

?>