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

elseif ($p === 'pitch') {
  require '../pages/pitch.php';
}

elseif ($p === 'traitement') {
  require '../pages/traitement.php';
}

elseif ($p === 'inscription') {
  require '../pages/inscription.php';

elseif ($p === 'connexion') {
  require '../pages/espace_admin/connexion.php';
}

elseif ($p === 'gerer') {
  require '../pages/espace_admin/gerer.php';
}

elseif ($p === 'details') {
  require '../pages/details.php';

}

$content = ob_get_clean();
require '../pages/templates/default.php';
