<?php

include_once("../Kozos/fuggvenyek.php"); 

$v_reszlegID = $_POST['reszlegID'];
$v_reszlegNev = $_POST['reszlegNev'];
$v_osztalyID = $_POST['osztalyID'];


if ( isset($v_reszlegID) && isset($v_reszlegNev) && isset($v_osztalyID)) {

	$sikeres = reszleget_beszur($v_reszlegID, $v_reszlegNev, $v_osztalyID);
	if ($sikeres == true) {
		header("Location: ../Kozos/index.php");
	} else {
		echo "Hiba volt a beszúrásnál";
	}
} else {
	error_log("Nincs beállítva valamely érték");	
}

?>