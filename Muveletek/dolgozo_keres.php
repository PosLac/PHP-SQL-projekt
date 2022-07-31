
<hr/>
<?php 
    include_once('../Kozos/fuggvenyek.php');
    include_once('../Kozos/menu.php');
	echo menu();
?>
<hr/>
<link rel="stylesheet" href="../CSS/style.css"/>

<?php

		if ( isset($_POST['adoszam'])) {
			$v_adoszam = $_POST['adoszam'];
		}

		if (isset($v_adoszam)) {

			$sikeres = dolgozot_keres($v_adoszam);

			if ($sikeres != true ) {
				echo 'Hiba történt a lekérdezés során (keres)';
			}			
		} 	
		else {
			error_log("Nincs beállítva valamely érték");
		}
		$conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
	
		mysqli_query($conn, 'SET NAMES UTF8');
		mysqli_query($conn, "SET character_set_results=utf8");
		mysqli_set_charset($conn, 'utf8');
	
	if ( mysqli_select_db($conn, 'database') ) {
			
			
			echo '<h1>Dolgozók</h1>'; 
			echo '<table border=1>';
			echo '<tr>';          
			echo '<th>adószám</th>';        
			echo '<th>név</th>';
			echo '<th>osztály neve</th>';
			echo '<th>részleg neve</th>';
			echo '</tr>';
				$dolgozo = dolgozot_keres($v_adoszam);  
	
			echo '<td>' .$dolgozo["adoszam"]. '</td>';
			echo '<td>' .$dolgozo["nev"]. '</td>';
			echo '<td>' .$dolgozo["osztalyNev"]. '</td>';
			echo '<td>' .$dolgozo["reszlegNev"]. '</td>';
			echo '<td><form method="POST" action="../Muveletek/dolgozo_torles.php">
					  <input type="hidden" name="toroltdolgozo" value="'.$dolgozo["adoszam"].'" />
					  <input type="submit" value="Törlés" />
					  </form></td>';
			echo '<td><form method="POST" action="../Muveletek/dolgozo_szerkesztes.php">
						<input type="hidden" name="adoszam" value="'.$dolgozo["adoszam"].'" />
						<input type="submit" value="Szerkesztés" />
						</form></td>';				
			echo '</tr>';
			
			echo '</table>';}
?>