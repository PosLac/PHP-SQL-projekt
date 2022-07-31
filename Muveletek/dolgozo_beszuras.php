<?php

include_once("../Kozos/fuggvenyek.php"); 
$v_adoszam = $_POST['adoszam'];
$v_nev = $_POST['nev'];
$v_fizuID = $_POST['fizuID'];
$v_osztalyID = $_POST['osztalyID'];
$v_reszlegID = $_POST['reszlegID'];
$v_helyettes = $_POST['helyettesAdoszam'];

if ( isset($v_adoszam) && isset($v_nev) && isset($v_fizuID)
  && isset($v_osztalyID) && isset($v_reszlegID) && isset($v_helyettes)) {

	$sikeres = dolgozot_beszur($v_adoszam, $v_nev, $v_fizuID, $v_osztalyID, $v_reszlegID, $v_helyettes);
	if ($sikeres == true) {
		header("Location: ../Kozos/index.php");
	} else {
		echo "Hiba volt a beszúrásnál";
	}
} else {
	error_log("Nincs beállítva valamely érték");	
}

?>