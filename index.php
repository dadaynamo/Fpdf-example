<?php
session_start();

//connessioni dbms e database
$conn = mysql_connect('127.0.0.1','root','') or die("Errore di connessione");
$db = mysql_select_db('my_dadaymattiasito') or die("errore con la scelta del DB");

//gestione variabili di controllo get e post generali
$pag  = filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$caso = filter_input(INPUT_POST,'caso',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//funzioni
include("php_part/test_foot.php");
include("php_part/navbar.php");
include("php_part/form_reg.php");
include("php_part/footer.php");
include("php_part/log_gest.php");
include("php_part/form_log.php");
include("php_part/carosel.php");

//pag
include("php_part/public_home.php");
include("php_part/login_page.php");
include("php_part/private_home.php");

//captcha
//include("captcha/captcha.php");

//pdf
include("pdf_gen/pdf1.php");
include("pdf_gen/pdf2.php");
include("pdf_gen/pdf3.php");

$close=mysql_close($conn);
?>