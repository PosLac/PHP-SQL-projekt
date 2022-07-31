
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
	

<h1>Dolgozó lekérdezése adószám alapján:</h1>

<form method="POST" action="../Muveletek/dolgozo_keres.php" accept-charset="utf-8">

   <label>Adószám: </label>
   <input type="text" name="adoszam" />
   <br>
   <input type="submit" value="Elküld" />
</form>


</table></BODY>
</HTML>