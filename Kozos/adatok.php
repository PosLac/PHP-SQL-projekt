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
mysqli_query($conn, 'SET character_set_results=utf8');
mysqli_set_charset($conn, 'utf8');
        

if ( mysqli_select_db($conn, 'database') ) {
    
    $dolgozo = dolgozot_listaz();
    $osztaly = osztalyt_listaz();
    $reszleg = reszleget_listaz(); 
    $fizetes = fizetest_listaz();     


    //fizetés
    echo '<h1>Fizetés</h1>'; 
    echo '<table border=1>';
    echo '<tr>';          
    echo '<th>fizuID</th>';        
    echo '<th>megnevezés</th>';
    echo '<th>összeg</th>';
    echo '</tr>';
    
    while ( ($current_row = mysqli_fetch_assoc($fizetes))!= null) {   
        echo '<tr>';
        echo '<td>' . $current_row["fizuID"] . '</td>';
        echo '<td>' . $current_row["megnevezes"] . '</td>';
        echo '<td>' . $current_row["osszeg"] . '</td>';
        echo '<td><form method="POST" action="../Muveletek/fizetes_torles.php">
                    <input type="hidden" name="toroltfizetes" value="'.$current_row["fizuID"].'" />
                    <input type="submit" value="Törlés" />
                    </form></td>';
        echo '<td><form method="POST" action="../Muveletek/fizetes_szerkesztes.php">
                <input type="hidden" name="fizuID" value="'.$current_row["fizuID"].'" />
                <input type="submit" value="Szerkesztés" />
                </form></td>';
        echo '</tr>';
    }
    echo '</table>';
    


    //dolgozók
    echo '<h1>Dolgozók</h1>'; 
    echo '<table border=1>';
    echo '<tr>';          
    echo '<th>adószám</th>';        
    echo '<th>név</th>';
    echo '<th>fizuID</th>';
    echo '<th>osztalyID</th>';
    echo '<th>reszlegID</th>';
    echo '<th>helyettesAdoszam</th>';
    echo '</tr>';
    while ( ($current_row = mysqli_fetch_assoc($dolgozo))!= null) {   
        echo '<tr>';
        echo '<td>' . $current_row["adoszam"] . '</td>';
        echo '<td>' . $current_row["nev"] . '</td>';
        echo '<td>' . $current_row["fizuID"] . '</td>';
        echo '<td>' . $current_row["osztalyID"] . '</td>';
        echo '<td>' . $current_row["reszlegID"] . '</td>';
        echo '<td>' . $current_row["helyettesAdoszam"] . '</td>';
        echo '<td><form method="POST" action="../Muveletek/dolgozo_torles.php">
                    <input type="hidden" name="toroltdolgozo" value="'.$current_row["adoszam"].'" />
                    <input type="submit" value="Törlés" />
                    </form></td>';
        echo '</tr>';
    }
    echo '</table>';

    //osztályok
    echo '<h1>Osztályok</h1>'; 
    echo '<table border=1>';
    echo '<tr>';          
    echo '<th>osztályID</th>';        
    echo '<th>osztályNév</th>';
    echo '<th>vezetiAdoszam</th>';
    echo '</tr>';
    while ( ($current_row = mysqli_fetch_assoc($osztaly))!= null) {   
        echo '<tr>';
        echo '<td>' . $current_row["osztalyID"] . '</td>';
        echo '<td>' . $current_row["osztalyNev"] . '</td>';
        echo '<td>' . $current_row["vezetiAdoszam"] . '</td>';
        echo '<td><form method="POST" action="../Muveletek/osztaly_torles.php">
                    <input type="hidden" name="toroltosztaly" value="'.$current_row["osztalyID"].'" />
                    <input type="submit" value="Törlés" />
                    </form></td>';
        echo '</tr>';
    }
    echo '</table>';
    
    //részlegek
    echo '<h1>Részlegek</h1>'; 
    echo '<table border=1>';
    echo '<tr>';          
    echo '<th>részlegID</th>';        
    echo '<th>részlegNév</th>';     
    echo '<th>osztályID</th>';
    echo '</tr>';
    while ( ($current_row = mysqli_fetch_assoc($reszleg))!= null) {   
        echo '<tr>';
        echo '<td>' . $current_row["reszlegID"] . '</td>';
        echo '<td>' . $current_row["reszlegNev"] . '</td>';
        echo '<td>' . $current_row["osztalyID"] . '</td>';
        echo '<td><form method="POST" action="../Muveletek/reszleg_torles.php">
                    <input type="hidden" name="toroltreszleg" value="'.$current_row["reszlegID"].'" />
                    <input type="submit" value="Törlés" />
                    </form></td>';
        echo '</tr>';
    }
    echo '</table>';
    
    
    mysqli_free_result($dolgozo);   
    mysqli_free_result($osztaly);    
    mysqli_free_result($reszleg);   
    mysqli_free_result($fizetes);    
} else {                                    
    die('Nem sikerült csatlakozni az adatbázishoz.');
}

mysqli_close($conn); 
?>
