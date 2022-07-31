
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
			
			
			echo '<h1>Legnagyobb átlagkeresetet adó részleg:</h1>'; 
			echo '<table border=1>';
			echo '<tr>';          
			echo '<th>részlegID</th>';        
			echo '<th>részleg neve</th>';     
			echo '<th>átlagos havi fizetés</th>';
			echo '</tr>';
			$reszleg = legnagyobb(); 
			while ($row = $reszleg->fetch_assoc()) {
			echo '<td>' .$row["reszlegID"]. '</td>';
			echo '<td>' .$row["reszlegNev"]. '</td>';
			echo '<td>' .$row["havi"]. '</td>';
				}
			echo '</tr>';
			
			echo '</table>';}
?>