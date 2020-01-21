<?php snippet('header') ?>

<main>
  <div class="cover-container">
    <?php if($image = $page->cover()->toFile()): ?>
      <div class="o-blue">
        <img src="<?= $image->url() ?>"></div>
    <?php endif ?>

    <?php if(!empty(trim($page->presentation()->kt()))): ?>
    <div class="cover-shade"></div>
    <div class="cover-text-container flex">
      <div class="cover-text">
        <?= $page->presentation()->kt() ?>
      </div>
    </div>
    <?php endif ?>
  </div>

  <div class="text">
    <?= $page->text()->kt() ?>
  </div>

  <div class="contact-container">
    <div class="contact">
      <?= $page->contact_text()->kt() ?>

      <?= html::email($site->email()) ?>
      <?= html::tel($site->phone()) ?>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
