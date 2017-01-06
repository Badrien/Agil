<ul>
  <?php foreach ($db->query('SELECT * FROM t_offers') as $offer) { ?>

    <li><?php echo $offer->title; ?></li>
    <p><?php echo $offer->content; ?></p>
    <?php var_dump(DateTime); ?>
  <?php } ?>
</ul>
