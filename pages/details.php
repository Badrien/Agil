<?php $offer = $db->prepare('SELECT * FROM t_offers WHERE id = ?', [$_GET['id']], 'App\Offer', true); ?>


<h1><?php echo $offer->getTitle(); ?></h1>
<p><?php echo $offer->getContent(); ?></p>
<button type="button" data-toggle="modal" data-target="#modalForm" name="buttonForm">Postuler</button>
