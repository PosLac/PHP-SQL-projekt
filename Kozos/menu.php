  
<?php

function menu() {
    $menustr  = '<span style="color:blue;font-weight:bold; padding:7px;">';
    $menustr .= '<a href="../Kozos/index.php">Felvétel</a>';
    $menustr .= '</span>';
    $menustr .= '<span style="color:blue;font-weight:bold; padding:7px;">';
    $menustr .= '<a href="../Kozos/adatok.php">Listázás/törlés</a>';
    $menustr .= '</span>';
    $menustr .= '<span style="color:blue;font-weight:bold; padding:7px;">';
    $menustr .= '<a href="../Lekerdezesek/dolgozot_lekerdez.php">Dolgozó szerkesztése</a>';
    $menustr .= '</span>';
    $menustr .= '<span style="color:blue;font-weight:bold; padding:7px;">';
    $menustr .= '<a href="../Lekerdezesek/beszerzes.php">Beszerzésen dolgozók</a>';
    $menustr .= '</span>';
    $menustr .= '<span style="color:blue;font-weight:bold; padding:7px;">';
    $menustr .= '<a href="../Lekerdezesek/legnagyobb.php">Legnagyobb átlagfizetésű részleg</a>';
    $menustr .= '</span>';
    $menustr .= '<span style="color:blue;font-weight:bold; padding:7px;">';
    $menustr .= '<a href="../Lekerdezesek/ugyfelszolgalatosok.php">Ügyfélszolgálatosok létszáma</a>';
    $menustr .= '</span>';      
    
    return $menustr;
}
?>