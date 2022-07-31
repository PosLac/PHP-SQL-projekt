
<hr/>
<?php 
    include_once('../Kozos/fuggvenyek.php');
    include_once('../Kozos/menu.php');
	echo menu();
?>
<hr/>

<!DOCTYPE HTML>
<HTML>
<HEAD>
	<meta http-equiv="content-type" content="text/html; charset=UTF8" >
	<link rel="stylesheet" href="../CSS/style.css"/>
</HEAD>
<BODY>

<?php
	$v_adoszam = $_POST['adoszam'];
	$dolgozo = dolgozot_keres_mind($v_adoszam);
?>
<h1>Dolgozó szerkesztése</h1>
<form method="POST" action="../Muveletek/dolgozo_szerkesztes_fg.php" accept-charset="utf-8">

<label>Adószám: </label>
<?php echo '<input type="text" name="adoszam" value="'.$dolgozo["adoszam"].'"/>'?><br>

<label>Név: </label>
<?php echo '<input type="text" name="nev" value="'.$dolgozo["nev"].'"/>'?><br>

<label>Fizetés: </label>
<?php echo '<input type="text" name="fizuID" value="'.$dolgozo["fizuID"].'"/>'?><br>

<label>Osztály: </label>
<?php echo '<input type="text" name="osztalyID" value="'.$dolgozo["osztalyID"].'"/>'?><br>

<label>Részleg: </label>
<?php echo '<input type="text" name="reszlegID" value="'.$dolgozo["reszlegID"].'"/>'?><br>

<label>Helyettes: </label>
<?php echo '<input type="text" name="helyettesAdoszam" value="'.$dolgozo["helyettesAdoszam"].'"/>'?><br>

<?php echo '<td><form method="POST" action="../Muveletek/dolgozo_szerkesztes_fg.php">
						<input type="hidden" name="adoszam" value="'.$dolgozo["adoszam"].'" />
						<input type="submit" value="Szerkesztés" />
						</form></td>'?>
</form>


</BODY>
</HTML>