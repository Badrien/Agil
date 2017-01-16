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

    <title>Agil</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="../public/js/modal.js" ></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="corps">
    <nav class="navbar navbar-default navbar-fixed-top navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a  class="navbar-brand altenrecrute" href="https://www.altenrecrute.fr" target="_blank"> <img src="../public/images/altenrecrute.png" alt="img altenrecrute"></a>
          </div>
          <div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php?p=home"class="navbar-brand linknav"> Accueil</a></li>
              <li><a href="https://www.altenrecrute.fr/blog-alten" target="_blank" class="navbar-brand linknav"> Blog</a></li>
              <li><a href="index.php?p=pitch"class="navbar-brand linknav">Pitch</a></li>
            </ul>

          </div>
        </div>
        <div class="lignes">
          <div class="lignerouge"></div>
          <div class="lignebleue"></div>
          <div class="lignejaune"></div>
        </div>
      </nav>

    <section>
      <?php echo $content; ?>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 cadretotal"> <!-- Premier niveau avec 12 colonnes -->
            <div class="row">
              <div class="col-md-offset-1 col-md-5 logofooter">
                <a href="http://www.alten.fr/" target="_blank"><img src="../public/images/logo-alten-blanc.png" class="logo-alten-blanc" alt="logo Alten blanc"></a>
                <p class="alten">ALTEN SA </br>
                40 Avenue André Morizet </br>
                92100 Boulogne Billancourt </br>
                Tel : +33 (0)1 46 08 72 00 </br></br></br></p>
              </div>
              <div class="col-md-offset-2 col-md-4">
              NOUS SUIVRE :</br>
                <p class="networks">
                  <p>
                    <a class="linknetworks" href="https://www.facebook.com/pages/ALTEN/107320699344327" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i><span class="namesocialmedia">Facebook</span></a>
                  </p>

                  <p>
                    <a class="linknetworks twitter" href="https://twitter.com/Alten_france" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i><span class="namesocialmedia">Twitter</span></a>
                  </p>

                  <p>
                    <a class="linknetworks youtube" href="https://www.youtube.com/user/altenfrance" target="_blank">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i><span class="namesocialmedia">Youtube</span></a>
                  </p>

                  <p>
                    <a class="linknetworks linkedin" href="http://www.linkedin.com/company/alten" target="_blank">
                    <i class="fa fa-linkedin" aria-hidden="true"></i><span class="namesocialmedia">LinkedIn</span></a>
                  </p>

                  <p>
                    <a class="linknetworks google+" href="https://plus.google.com/u/0/111081371717871070699" target="_blank">
                    <i class="fa fa-google-plus" aria-hidden="true"></i><span class="namesocialmedia">Google+</span></a>
                  </p>

                  <p>
                    <a class="viadeo" href="http://fr.viadeo.com/fr/company/alten" target="_blank">
                    <!--<i class="fa fa-viadeo" aria-hidden="true"></i><span class="namesocialmedia">Viadeo</span></a>-->
                    <img src="../public/images/viadeo.png" class="logo-viadeo" alt="logo Viadeo"><span class="namesocialmedia">Viadeo</span></a>
                  </p>
                </p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer>

  </div>
  </body>
</html>
