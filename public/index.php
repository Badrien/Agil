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
$content = ob_get_clean();
require '../pages/templates/default.php';
