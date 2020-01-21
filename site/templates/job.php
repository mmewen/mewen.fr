<?php snippet('header') ?>

<main>
  <div>
    <img src="<?= $page->cover()->url() ?>">
  </div>
  <div class="text">
    <?= $page->presentation()->kt() ?>
  </div>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
  <div class="text">
    <?= $page->contact_text()->kt() ?>
  </div>
</main>

<?php snippet('footer') ?>
