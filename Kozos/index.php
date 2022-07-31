
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

<h1>Dolgozó felvétele</h1>
<form method="POST" action="../Muveletek/dolgozo_beszuras.php" accept-charset="utf-8">
<label>Adószám: </label>
<input type="text" name="adoszam" />
<br>
<label>Név: </label>
<input type="text" name="nev" />
<br>
<label>Fizetés: </label>
<input type="text" name="fizuID" />
<br>
<label>Osztály: </label>
<input type="text" name="osztalyID" />
<br>
<label>Részleg: </label>
<input type="text" name="reszlegID" />
<br>
<label>Helyettes: </label>
<input type="text" name="helyettesAdoszam" />
<br>
<input type="submit" value="Felvétel" />
</form>


<h1>Osztály felvétele</h1>
<form method="POST" action="../Muveletek/osztaly_beszuras.php" accept-charset="utf-8">
<label>OsztályID: </label>
<input type="text" name="osztalyID" />
<br>
<label>Megnevezés: </label>
<input type="text" name="osztalyNev" />
<br>
<label>Vezető: </label>
<input type="text" name="vezetiAdoszam" />
<br>
<input type="submit" value="Felvétel" />
</form>

<h1>Részleg felvétele</h1>
<form method="POST" action="../Muveletek/reszleg_beszuras.php" accept-charset="utf-8">
<label>RészlegID: </label>
<input type="text" name="reszlegID" />
<br>
<label>Megnevezés: </label>
<input type="text" name="reszlegNev" />
<br>
<label>OsztályID: </label>
<input type="text" name="osztalyID" />
<br>
<input type="submit" value="Felvétel" />
</form>


<h1>Fizetési kategória felvétele</h1>
<form method="POST" action="../Muveletek/fizetes_beszuras.php" accept-charset="utf-8">
<label>FizuID: </label>
<input type="text" name="fizuID" />
<br>
<label>Megnevezés: </label>
<input type="text" name="megnevezes" />
<br>
<label>Összeg: </label>
<input type="text" name="osszeg" />
<br>
<input type="submit" value="Felvétel" />
</form>

</BODY>
</HTML>