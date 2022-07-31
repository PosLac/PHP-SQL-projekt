
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
	$v_fizuID = $_POST['fizuID'];
	$fizetes = fizetest_keres($v_fizuID);
?>
<h1>Fizetés szerkesztése</h1>
<form method="POST" action="../Muveletek/fizetes_szerkesztes_fg.php" accept-charset="utf-8">

<label>FizuID: </label>
<?php echo '<input type="text" name="fizuID" value="'.$fizetes["fizuID"].'"/>'?><br>

<label>Megnevezés: </label>
<?php echo '<input type="text" name="megnevezes" value="'.$fizetes["megnevezes"].'"/>'?><br>

<label>Összeg: </label>
<?php echo '<input type="text" name="osszeg" value="'.$fizetes["osszeg"].'"/>'?><br>

<?php echo '<td><form method="POST" action="../Muveletek/fizetes_szerkesztes_fg.php">
						<input type="hidden" name="fizuID" value="'.$fizetes["fizuID"].'" />
						<input type="submit" value="Szerkesztés" />
						</form></td>'?>
</form>


</BODY>
</HTML>