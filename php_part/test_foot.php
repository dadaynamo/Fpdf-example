<?php
function testata(){
echo "<!DOCTYPE html>"."\n";
echo "<html>"."\n";
echo "<head>"."\n";
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";

echo '<link rel="stylesheet" href="css/bootstrap.min.css?ts=<?=time()?>&quot" type="text/css">'."\n";

echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">';
echo '<link rel="icon" href="logo.png" type="image/png">'."\n";
echo "<title>Ticket</title>"."\n";
echo "</head>"."\n";
echo '<body>'."\n";
}

function closer(){
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
echo '<script src="js/bootstrap.min.js" ></script>';
echo "</body>"."\n";
echo "</html>"."\n";
}


?>