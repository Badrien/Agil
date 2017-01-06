<ul>

  <?php foreach ($db->query('SELECT * FROM t_offers', 'App\Offer') as $offer) { ?>
    <div class="">
        <a href=<?php echo $offer->getUrl(); ?>>
          <h3><?php echo $offer->getTitle(); ?></h3>
          <time><?php echo $offer->getDate_publication(); ?></time>
        </a>
    </div>

  <?php } ?>
</ul>
