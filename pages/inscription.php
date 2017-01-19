<?php
session_start();
  if ($_POST['annonces'] == null) {
    echo "SALUT";
  }
  $_SESSION['offers_selected'] = array();


  foreach($_POST['annonces'] as $value)
  {
    echo "La checkbox $value a été cochée<br>";
    array_push($_SESSION['offers_selected'], $value);

  $_SESSION['number_of_offers_selected'] = count($_SESSION['offers_selected']);
}



?>

<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <form class="form-horizontal form-registration" action="index.php?p=pitch"  enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="last_name">Nom:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="last_name" placeholder="Dupont">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="first_name">Prénom:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="first_name" placeholder="Jean">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cv">Déposer CV:</label>
    <div class="col-sm-10 ">
      <input type="file" name="cv" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-2">
      <button type="submit" class="myButton">Submit</button>
    </div>
  </div>
</form>
    </div>
  </div>

</div>
