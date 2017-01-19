<?php

session_start();
	if(isset($_POST["last_name"]))
	{
		$last_name = str_to_noaccent(htmlspecialchars($_POST["last_name"]));
	}

	if(isset($_POST["first_name"]))
	{
		$first_name = str_to_noaccent(htmlspecialchars($_POST["first_name"]));
	}

  if(isset($_POST["email"]))
	{
		$email = htmlspecialchars($_POST["email"]);
	}

	$cv_name = null;

  // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
  if (isset($_FILES['cv']) AND $_FILES['cv']['error'] == 0)
  {
    // Testons si le fichier n'est pas trop gros
        if ($_FILES['cv']['size'] <= 1000000)
        {
          // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['cv']['name']);
            $extension_upload = strtolower($infosfichier['extension']);
            $extensions_autorisees = array('pdf', 'docx');
            if (in_array($extension_upload, $extensions_autorisees))
            {
              // On peut valider le fichier et le stocker définitivement
							$cv_name = strtolower($first_name . '-' . $last_name . '.' . $extension_upload);
              move_uploaded_file($_FILES['cv']['tmp_name'], '../uploads/cv/' . $cv_name);
              echo "L'envoi a bien été effectué !";
            }
						else {
							echo "mauvais format de fichier";
						}
        }
  }

	$db = new PDO('mysql:dbname=agility;host=agility','root','');
	$req = $db->prepare('INSERT INTO t_candidates (last_name, first_name, email, cv_file) VALUES (:last_name, :first_name, :email, :cv_file)');
	$req->execute(array(
		'last_name' => $last_name,
		'first_name' => $first_name,
		'email' => $email,
		'cv_file' => $cv_name
	));

		$mycandidate = $db->query('SELECT * FROM t_candidates WHERE id = 5', 'App\Candidate');
		$myid = $mycandidate->getId();
		var_dump($myid);

		for ($i=0; $i < count($_SESSION['offers_selected']) ; $i++) {
		$req = $db->prepare('INSERT INTO t_candidatures (offer_id, candidate_id) VALUES (:offer_id, :candidate_id)');
		$req->execute(array(
				'offer_id' => $_SESSION['offers_selected'][$i],
				'candidate_id' => $myid
		));
	}
?>
