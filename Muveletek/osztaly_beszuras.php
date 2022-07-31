<?php

include_once("../Kozos/fuggvenyek.php"); 

$v_osztalyID = $_POST['osztalyID'];
$v_osztalyNev = $_POST['osztalyNev'];
$v_vezetiAdoszam = $_POST['vezetiAdoszam'];


if ( isset($v_osztalyID) && isset($v_osztalyNev) && isset($v_vezetiAdoszam)) {

	$sikeres = osztalyt_beszur($v_osztalyID, $v_osztalyNev, $v_vezetiAdoszam);
	if ($sikeres == true) {
		header("Location: ../Kozos/index.php");
	} else {
		echo "Hiba volt a beszúrásnál";
	}
} else {
	error_log("Nincs beállítva valamely érték");	
}

?>