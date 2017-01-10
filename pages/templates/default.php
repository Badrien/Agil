<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="../pages/css/style.css">

    <title>Agil</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="../public/js/modal.js" ></script>

  <body class="corps">
    <!-- <img src = "images/imgHeader.jpg" alt="header"/> -->

  </head>

  <body class="corps">

    <nav class="navbar navbar-fixed-top">
      <div id="menu" class="container-fluid">
        <a href="https://www.altenrecrute.fr/"class="navbar-brand"> Alten recrute</a>
        <a href="https://www.altenrecrute.fr/blog-alten"class="navbar-brand"> Blog</a>
        <a href="index.php?p=home"class="navbar-brand"> Accueil</a>
        <a href="index.php?p=pitch"class="navbar-brand">Pitch</a>
      </div>
    </nav>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12"> <!-- Premier niveau avec 12 colonnes -->
            <div class="row">
              <div class="col-md-4"> RECHERCHE </div> <!-- Deuxiemme niveau avec 4 colonnes -->
              <div id="resultats"class="col-md-offset-1 col-md-7"> RESULTATS <!-- Deuxiemme niveau avec 5 colonnes -->
                <div class="row">

                  <div class="col-md-5"></div>
                  <div class="contenu">
                      <?php echo $content; ?>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div><!-- /.container -->
    </section>

  </body>
</html>
