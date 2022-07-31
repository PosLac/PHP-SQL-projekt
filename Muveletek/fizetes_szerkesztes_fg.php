<?php

include_once("../Kozos/fuggvenyek.php"); 

$v_fizuID = $_POST['fizuID'];
$v_megnevezes = $_POST['megnevezes'];
$v_osszeg = $_POST['osszeg'];

if ( isset($v_fizuID) && isset($v_megnevezes) && isset($v_osszeg)) {

	$sikeres = fizetest_szerkeszt($v_fizuID, $v_megnevezes, $v_osszeg);
	if ($sikeres == true) {
		header("Location: ../Kozos/adatok.php");
	} else {
		echo "Hiba volt a szerkesztésnél";
	}
} else {
	error_log("Nincs beállítva valamely érték");	
}

?>