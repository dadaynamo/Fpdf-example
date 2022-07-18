<?php
if ($caso=="login1" && !isset($_SESSION["idut"])) {
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pwd = filter_input(INPUT_POST,'passw',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$q = "select * from utenti_giostra where email='".$email."'";
$rq = mysql_query($q) or die(mysql_error());
$num = mysql_num_rows($rq);
if ($num==1) {
		//username esiste
		$utente = mysql_fetch_assoc($rq);
		//if ($_POST["password"] == $utente["password"]) {

		if (password_verify(hash('sha512', $pwd),$utente["passw"]))
		{
			//password corretta
			$_SESSION["idut"] = $utente["idut"];
            $_SESSION["nome"] = $utente["nome"];
            $_SESSION["cognome"] = $utente["cognome"];
            $_SESSION["telefono"] = $utente["telefono"];
            $_SESSION["email"] = $utente["email"];
            
			header("Location: index.php");
		}
		else
		{
			//password errata
			testata();
			echo '<p>Password errata</p>';
			closer();
		}
}
else {
//username inesistente
testata();
echo '<p>Utente inesistente</p>';
closer();
}
}


if ($pag=='logout' && isset($_SESSION["idut"]))
{
//cancella i dati in $_session
	session_unset();
//chiude la sessione
    session_destroy();
    header("Location:index.php?pag=");
}



if ($caso=="registrati2" && !isset($_SESSION["idut"]))
{
if ($_POST['captcha'] != $_SESSION['captcha']) {
    die("<a href='index.php'>Attenzione - Codice captcha non valido!</a>");
}
else
{
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pwd=filter_input(INPUT_POST,'passw',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo $email;

	$q = "select * from utenti_giostra where email='".$email."'";
	$rq = mysql_query($q) or die(mysql_error());
	$num = mysql_num_rows($rq);
	if ($num==0)
	{
$hashed = password_hash(hash('sha512', $pwd), PASSWORD_DEFAULT);
		$q = "insert into utenti_giostra (idut,nome,cognome,email,telefono,passw) values (";
		$q.= "NULL,";
		$q.= "'".mysql_real_escape_string($_POST["nome"])."',";
		$q.= "'".mysql_real_escape_string($_POST["cognome"])."',";
		$q.= "'".mysql_real_escape_string($_POST["email"])."',"; 
		$q.= "'".mysql_real_escape_string($_POST["telefono"])."',";        
		$q.= "'".$hashed."')";
		$rq = mysql_query($q) or die(mysql_error());
		testata();
	header('Location: index.php');
		closer();
        
	}
	else
	{
		testata();
		header('Location: index.php');
		closer();
	}

}

}


?>
