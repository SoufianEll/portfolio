<?php include('header.php'); 


$meubel = ['Tafel','stoel','Kast','Bank'];

foreach ($meubel as $item) { 
    echo "<tr>";   
    echo "<td>$item</td>"; 
    echo "</tr>";
}
?>



<?php
include('footer.php');
?>