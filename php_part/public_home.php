<?php




if($pag=='' && $caso=='' && !isset($_SESSION["idut"]))
{
testata();
navbar();
echo "<br>";
echo '<div class="container">';
echo '<h3>Registrati per comprare i biglietti</h3>';
echo '</div>';
echo "<hr>";
form_reg();
footer();
closer();
}


?>