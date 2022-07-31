
<hr/>
<?php 
    include_once('../Kozos/fuggvenyek.php');
    include_once('../Kozos/menu.php');
	echo menu();
?>
<hr/>
<link rel="stylesheet" href="../CSS/style.css"/>

<?php

		$conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
	
		mysqli_query($conn, 'SET NAMES UTF8');
		mysqli_query($conn, "SET character_set_results=utf8");
		mysqli_set_charset($conn, 'utf8');
	
	if ( mysqli_select_db($conn, 'database') ) {
			
			
			echo '<h1>Ügyfélszolgálaton dolgozók létszáma és részlegük neve:</h1>'; 
			echo '<table border=1>';
			echo '<tr>';          
			echo '<th>részleg neve</th>';        
			echo '<th>létszám</th>';     
			echo '</tr>';
			$letszam = ugyf_letszam(); 
			while ($row = $letszam->fetch_assoc()) {    
				echo '<tr>';
				echo '<td>' .$row["reszlegNev"]. '</td>';
				echo '<td>' .$row["letszam"]. '</td>';    
				echo '</tr>';
			}
			echo '</tr>';
			
			echo '</table>';}
?>