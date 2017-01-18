<?php
	if(isset($_POST["last_name"]))
	{
		$last_name = $_POST["last_name"];
		echo $last_name;
	}

	if(isset($_POST["first_name"]))
	{
		$first_name = $_POST["first_name"];
		echo $first_name;
	}

  if(isset($_POST["email"]))
	{
		$email = $_POST["email"];
		echo $email;
	}

  // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
  if (isset($_FILES['CV']) AND $_FILES['CV']['error'] == 0)
  {
    // Testons si le fichier n'est pas trop gros
        if ($_FILES['CV']['size'] <= 1000000)
        {
          // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['CV']['name']);
            $extension_upload = strtolower($infosfichier['extension']);
            $extensions_autorisees = array('pdf');
            if (in_array($extension_upload, $extensions_autorisees))
            {
              // On peut valider le fichier et le stocker définitivement
              move_uploaded_file($_FILES['CV']['tmp_name'], 'CV' . DS . $first_name . '-' . $last_name . '.' . $extension_upload);
              echo "L'envoi a bien été effectué !";
            }
						else {
							echo "mauvais format de fichier";
						}
        }
  }

?>
