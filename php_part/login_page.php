<?php

if($pag=='login' && $caso=='' && !isset($_SESSION["idut"]))
{
testata();
navbar();
echo "<br>";
form_log();
footer();
closer();
}


?>