<?php snippet('header') ?>

<main>
  <section class="intro">
    <h1>Blog</h1>
  </section>

  <section class="text">
    <?= $page->presentation()->kt() ?>
  </section>

  <section class="text">
    <h2>Articles</h2>
    <ul>
      <?php foreach($page->children()->listed()/*->flip()*/ as $article): ?>
      <li><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </section>

  <section class="text">
    <?= $page->outro()->kt() ?>
  </section>
</main>

<?php snippet('footer') ?>
