<?php
function form_log(){
echo '<div class="container">';
echo '<form method="POST" action="index.php">';
echo '<div class="mb-3">';
echo '<label for="exampleInputEmail1" class="form-label">Email address</label>';
echo '<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">';
echo '<div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>';
echo '</div>';
echo '<div class="mb-3">';
echo '<label for="exampleInputPassword1" class="form-label">Password</label>';
echo '<input type="password" class="form-control" id="exampleInputPassword1" name="passw">';
echo '</div>';
echo '<input type="hidden" name="caso" value="login1">';
echo '<button type="submit" class="btn btn-primary">Submit</button>';
echo '</form>';
echo '</div>';
}
?>