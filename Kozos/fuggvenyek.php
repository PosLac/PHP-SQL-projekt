<?php

//csatlakozas
function csatlakozas() {
	
	$conn = mysqli_connect("localhost", "root", "") or die("Csatlakozási hiba");
	if ( false == mysqli_select_db($conn, "database" )  ) {
		return null;
	}
	
	mysqli_query($conn, 'SET NAMES UTF8');
	mysqli_query($conn, 'SET character_set_results=utf8');
	mysqli_set_charset($conn, 'utf8');
	
	return $conn;
}

//DOLGOZO
function dolgozot_listaz(){
        
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	$dolgozo = "SELECT * FROM DOLGOZO ORDER BY reszlegID, osztalyID";
	$result = mysqli_query($conn, $dolgozo) or die ('Hibás lekérdezés! (dolgozo)'); 

	mysqli_close($conn);
	return $result;
}

function dolgozot_keres($adoszam){
        
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
    $stmt = mysqli_prepare( $conn,"SELECT dolgozo.adoszam, dolgozo.nev, osztaly.osztalyNev, reszleg.reszlegNev
									 FROM DOLGOZO, RESZLEG, OSZTALY WHERE adoszam = ? AND dolgozo.osztalyID = osztaly.osztalyID
									 AND dolgozo.reszlegID = reszleg.reszlegID");  	  
    mysqli_stmt_bind_param($stmt, "s", $adoszam);   
    $result = mysqli_stmt_execute($stmt);  


	if($result == false){
		die ('Hibás lekérdezés! (dolgozo)');
	}
 	  
    mysqli_stmt_bind_result($stmt, $adoszam, $nev, $osztalyNev, $reszlegNev);   
	$dolgozo = array();

	mysqli_stmt_fetch($stmt);
	$dolgozo["adoszam"] = $adoszam;
	$dolgozo["nev"] = $nev;
	$dolgozo["osztalyNev"] = $osztalyNev;
	$dolgozo["reszlegNev"] = $reszlegNev;

	mysqli_close($conn);
	return $dolgozo;
}

function dolgozot_keres_mind($adoszam){
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
    $stmt = mysqli_prepare( $conn,"SELECT * FROM DOLGOZO WHERE adoszam = ?");  	  
    mysqli_stmt_bind_param($stmt, "s", $adoszam);   
    $result = mysqli_stmt_execute($stmt);  


	if($result == false){
		die ('Hibás lekérdezés! (dolgozo)');
	}
 	  
    mysqli_stmt_bind_result($stmt, $adoszam, $nev, $fizuID, $osztalyID, $reszlegID, $helyettesAdoszam);   
	$dolgozo = array();

	mysqli_stmt_fetch($stmt);
	$dolgozo["adoszam"] = $adoszam;
	$dolgozo["nev"] = $nev;
	$dolgozo["fizuID"] = $fizuID;
	$dolgozo["osztalyID"] = $osztalyID;
	$dolgozo["reszlegID"] = $reszlegID;
	$dolgozo["helyettesAdoszam"] = $helyettesAdoszam;

	mysqli_close($conn);
	return $dolgozo;	
}

function dolgozot_beszur($adoszam, $nev, $fizuID, $osztalyID, $reszlegID, $helyettesAdoszam) {
	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare($conn,"INSERT INTO DOLGOZO(adoszam, nev, fizuID, osztalyID, reszlegID, helyettesAdoszam) VALUES (?, ?, ?, ?, ?, ?)");
	
	mysqli_stmt_bind_param($stmt, "ssddds", $adoszam, $nev, $fizuID, $osztalyID, $reszlegID, $helyettesAdoszam);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}

function dolgozot_szerkeszt($adoszam, $nev, $fizuID, $osztalyID, $reszlegID, $helyettesAdoszam) {
	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare($conn,"UPDATE DOLGOZO SET nev = ?, fizuID = ?, osztalyID = ?, reszlegID = ?, helyettesAdoszam = ? WHERE  adoszam =  ?");
	
	mysqli_stmt_bind_param($stmt, "sdddss", $nev, $fizuID, $osztalyID, $reszlegID, $helyettesAdoszam, $adoszam);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}

function dolgozot_torol($adoszam) {	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}	
	
	$stmt = mysqli_prepare( $conn,"DELETE FROM DOLGOZO WHERE adoszam = ?");	
	mysqli_stmt_bind_param($stmt, "s", $adoszam);	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}


//OSZTALY
function osztalyt_listaz(){
        
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	$osztaly = "SELECT * FROM OSZTALY";
	$result = mysqli_query($conn, $osztaly) or die ('Hibás lekérdezés! (osztaly)'); 

	mysqli_close($conn);
	return $result;
}

function osztalyt_beszur($osztalyID, $osztalyNev, $vezetiAdoszam) {
	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare( $conn,"INSERT INTO OSZTALY(osztalyID, osztalyNev, vezetiAdoszam) VALUES (?, ?, ?)");
	
	mysqli_stmt_bind_param($stmt, "dss", $osztalyID, $osztalyNev, $vezetiAdoszam);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}

function osztalyt_torol($osztalyID) {	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare( $conn,"DELETE FROM OSZTALY WHERE osztalyID = ?");
	
	mysqli_stmt_bind_param($stmt, "d", $osztalyID);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}


//RESZLEG
function reszleget_listaz(){
        
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	$reszleg = "SELECT * FROM RESZLEG ORDER BY osztalyID, reszlegID";
	$result = mysqli_query($conn, $reszleg) or die ('Hibás lekérdezés! (reszleg)'); 

	mysqli_close($conn);
	return $result;
}

function reszleget_beszur($reszlegID, $reszlegNev, $osztalyID) {
	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare( $conn,"INSERT INTO RESZLEG(reszlegID, reszlegNev, osztalyID) VALUES (?, ?, ?)");
	
	mysqli_stmt_bind_param($stmt, "dsdd", $reszlegID, $reszlegNev, $osztalyID);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}

function reszleget_torol($reszlegID) {	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare( $conn,"DELETE FROM RESZLEG WHERE reszlegID = ?");
	
	mysqli_stmt_bind_param($stmt, "d", $reszlegID);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}


//FIZETES
function fizetest_listaz(){
        
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	$fizetes = "SELECT * FROM FIZETES";
	$result = mysqli_query($conn, $fizetes) or die ('Hibás lekérdezés! (fizetes)'); 

	mysqli_close($conn);
	return $result;
}

function fizetest_beszur($fizuID, $megnevezes, $osszeg) {	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
		
	$stmt = mysqli_prepare( $conn,"INSERT INTO FIZETES(fizuID, megnevezes, osszeg) VALUES (?, ?, ?)");
	
	mysqli_stmt_bind_param($stmt, "dsd", $fizuID, $megnevezes, $osszeg);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}

function fizetest_torol($fizuID) {	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare( $conn,"DELETE FROM FIZETES WHERE fizuID = ?");
	
	mysqli_stmt_bind_param($stmt, "d", $fizuID);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}

function fizetest_keres($fizuID){
        
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
    $stmt = mysqli_prepare( $conn,"SELECT * FROM FIZETES WHERE fizuID = ?");  	  
    mysqli_stmt_bind_param($stmt, "s", $fizuID);   
    $result = mysqli_stmt_execute($stmt);  


	if($result == false){
		die ('Hibás lekérdezés! (fizetes)');
	}

 	  
    mysqli_stmt_bind_result($stmt, $fizuID, $megnevezes, $osszeg);   
	$fizetes = array();

	mysqli_stmt_fetch($stmt);
	$fizetes["fizuID"] = $fizuID;
	$fizetes["megnevezes"] = $megnevezes;
	$fizetes["osszeg"] = $osszeg;

	mysqli_close($conn);
	return $fizetes;
}

function fizetest_szerkeszt($fizuID, $megnevezes, $osszeg) {
	
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}
	
	
	$stmt = mysqli_prepare($conn,"UPDATE FIZETES SET megnevezes = ?, osszeg = ? WHERE fizuID = ?");
	
	mysqli_stmt_bind_param($stmt, "ssd", $megnevezes, $osszeg, $fizuID);
	
	$sikeres = mysqli_stmt_execute($stmt); 
		
	mysqli_close($conn);
	return $sikeres;	
}


//LEKERDEZESEK
function legnagyobb(){
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}

	
	$reszleg = "SELECT DISTINCT reszleg.reszlegID, reszleg.reszlegNev, 
				sum(CONVERT(fizetes.osszeg, DECIMAL))/count(dolgozo.adoszam) as havi FROM reszleg, dolgozo, fizetes 
					WHERE dolgozo.fizuID = fizetes.fizuID and reszleg.reszlegID = 
					(SELECT DISTINCT dolgozo.reszlegID FROM dolgozo, fizetes
					 WHERE dolgozo.fizuID = fizetes.fizuID GROUP BY dolgozo.reszlegID 
					 ORDER BY sum(CONVERT(fizetes.osszeg, DECIMAL))/count(dolgozo.adoszam) DESC LIMIT 1)GROUP BY dolgozo.reszlegID LIMIT 1";
	$result = mysqli_query($conn, $reszleg) or die ('Hibás lekérdezés! (reszleg)'); 

	mysqli_close($conn);
	return $result;
}

function ugyf_letszam(){
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}

	
	$letszam = "SELECT DISTINCT reszleg.reszlegNev, COUNT(dolgozo.adoszam) AS letszam FROM osztaly, dolgozo, reszleg 
				WHERE dolgozo.osztalyID = osztaly.osztalyID AND dolgozo.reszlegID = reszleg.reszlegID
				AND reszleg.osztalyID = osztaly.osztalyID AND dolgozo.osztalyID = 2
				GROUP BY reszleg.reszlegID ORDER BY reszleg.reszlegID";
	$result = mysqli_query($conn, $letszam) or die ('Hibás lekérdezés! (reszleg)'); 

	mysqli_close($conn);
	return $result;
}

function beszerzes_letszam(){
	
	if ( !($conn = csatlakozas()) ) { 
		return false;
	}

	
	$letszam = "SELECT DISTINCT reszleg.reszlegNev, COUNT(dolgozo.adoszam) AS letszam FROM osztaly, dolgozo, reszleg 
				WHERE dolgozo.osztalyID = osztaly.osztalyID AND dolgozo.reszlegID = reszleg.reszlegID
				AND reszleg.osztalyID = osztaly.osztalyID AND dolgozo.osztalyID = 3
				GROUP BY reszleg.reszlegID ORDER BY reszleg.reszlegID";
	$result = mysqli_query($conn, $letszam) or die ('Hibás lekérdezés! (reszleg)'); 

	mysqli_close($conn);
	return $result;
}
