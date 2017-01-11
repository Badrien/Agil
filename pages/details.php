<?php //$offer = $db->prepare('SELECT * FROM t_offers WHERE id = ?', [$_GET['id']], 'App\Offer', true); ?>
<div class="modal fade modalForm" role="dialog"  tabindex="-1" aria-labelledby="modalFormLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" id="modalClose" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4>Postuler pour une offre :</h4>
      </div>
        <div class="modal-body">
          <h1><?php echo $offer->getTitle(); ?></h1>
          <p><?php echo $offer->getContent(); ?></p>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>
