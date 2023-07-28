<?php snippet('header') ?>
<section class="container">
  <h1><?= $page->title() ?></h1>
</section>


<section>
  <div class="container">
    <div class="image">
      <img src="<?= $page->image()->url() ?>">
    </div>
    <div class="text">
      <p><?= $page->text() ?></p>
    </div>
  </div>
</section>

<?php snippet('footer') ?>
