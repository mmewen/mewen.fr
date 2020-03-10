<?php snippet('header') ?>

<main>
  <section class="intro">
    <h1><?= $page->title()->html() ?></h1>
    <h2><?= $page->subtitle()->html() ?></h2>
  </section>

  <section class="text">
    <?= $page->presentation()->kt() ?>
  </section>

  <section class="text">
    <h2>Chapitres</h2>
    <ul>
      <?php foreach($page->children()->listed()/*->flip()*/ as $article): ?>
      <li><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="text">
    <?= $page->text()->kt() ?>
  </section>
</main>

<?php snippet('footer') ?>
