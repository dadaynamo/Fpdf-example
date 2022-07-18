<?php
function navbar(){
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
echo '<div class="container-fluid">';
echo '<a class="navbar-brand" href="index.php">Movieland</a>';
echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
/*echo '<li class="nav-item">';
echo '<a class="nav-link active" aria-current="page" href="index.php">Registrati</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="#">Link</a>';
echo '</li>';*/
echo '<li class="nav-item dropdown">';
echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
echo '<i class="fas fa-user-circle"></i>';
echo '</a>';
echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
if(!isset($_SESSION["idut"]))
{
echo '<li><a class="dropdown-item" href="index.php?pag=login">Login</a></li>';
echo '<li><a class="dropdown-item" href="index.php?pag=">Registrati</a></li>';
}
//echo '<li><hr class="dropdown-divider"></li>';
if(isset($_SESSION["idut"]))
echo '<li><a class="dropdown-item" href="index.php?pag=logout">Logout</a></li>';
echo '</ul>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Premium</a>';
echo '</li>';
echo '</ul>';
echo '<form class="d-flex">';
echo '<input class="form-control me-2" type="search" placeholder="Cerca Film" aria-label="Search">';
echo '<button class="btn btn-outline-success" type="submit">VAI!</button>';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</nav>';

}

?>