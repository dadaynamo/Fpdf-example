<?php


function form_reg(){
echo '<div class="container">'."\n";
  echo '<form method="POST" action="index.php">';
    echo '<div class="mb-4">';
      echo '<label for="exampleInputEmail1" class="form-label">Nome</label>';
      echo '<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" required>';
      echo '<div id="emailHelp" class="form-text">Inserisci il tuo nome</div>';
    echo '</div>';
        echo '<div class="mb-4">';
      echo '<label for="exampleInputEmail1" class="form-label">Cognome</label>';
      echo '<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cognome" required>';
      echo '<div id="emailHelp" class="form-text">Inserisci il tuo cognome</div>';
    echo '</div>';
        echo '<div class="mb-4">';
      echo '<label for="exampleInputEmail1" class="form-label">Indirizzo mail</label>';
      echo '<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>';
      echo '<div id="emailHelp" class="form-text">Inserisci la tua mail principale</div>';
    echo '</div>';
        echo '<div class="mb-4">';
      echo '<label for="exampleInputEmail1" class="form-label">Telefono</label>';
      echo '<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefono" maxlength="10" pattern="[0-9]{10}"  required>';
      echo '<div id="emailHelp" class="form-text">Inserisci numero di telefono Telefono</div>';
    echo '</div>';
    echo '<div class="mb-3">';
      echo '<label for="exampleInputPassword1" class="form-label">Password</label>';
      echo '<input type="password" class="form-control" id="exampleInputPassword1" name="passw" required>';
    echo '</div>';
        echo '<div class="mb-3">';
echo '<img src="captcha/captcha.php" >';
echo '<label> CAPTCHA <input type="text" name="captcha" required></label>';

    echo '</div>';
     echo '<input type="hidden" name="caso" value="registrati2">';
    echo '<button type="submit" class="btn btn-primary">Conferma</button>';
  echo '</form>';
echo "</div>";



}







?>