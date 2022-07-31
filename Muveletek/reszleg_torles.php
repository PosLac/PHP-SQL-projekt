<?php

include_once('../Kozos/fuggvenyek.php');

$toroltreszleg = $_POST["toroltreszleg"];

if ( isset($toroltreszleg) ) {
	
	$sikeres = reszleget_torol($toroltreszleg);
	
	if ( $sikeres ) {
		header('Location: ../Kozos/adatok.php');
	} else {
		echo 'Hiba történt a törlés során';
	}
	
} else {
	echo 'Hiba történt a törlés során';
	
}

?>