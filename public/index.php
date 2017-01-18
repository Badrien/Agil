<?php

 require '../app/Autoloader.php';
 App\Autoloader::register();

/* var string $p
  variable Url
*/
if (isset($_GET['p'])) {
  $p = $_GET['p'];
}
else {
  $p = 'home';
}

//Connection to the database
$db = new App\Database('agility');
ob_start();
if ($p === 'home') {
  require '../pages/home.php';
}
if ($p === 'pitch') {
  require '../pages/pitch.php';
}

if ($p === 'traitement') {
  require '../pages/traitement.php';
}

if ($p === 'inscription') {
  require '../pages/inscription.php';
}

if ($p === 'connexion') {
  require '../pages/espace_admin/connexion.php';
}

elseif ($p === 'gerer') {
  require '../pages/espace_admin/gerer.php';
}

<<<<<<< HEAD
if ($p === 'ajouter') {
  require '../pages/espace_admin/ajouter.php';
}

if ($p === 'menu') {
  require '../pages/espace_admin/menu.php';
}

if ($p === 'nouvelle-annonce') {
  require '../pages/espace_admin/nouvelle-annonce.php';
}

elseif ($p === 'details') {
  require '../pages/details.php';
}

=======
>>>>>>> origin/master
$content = ob_get_clean();
require '../pages/templates/default.php';
