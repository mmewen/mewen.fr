<?php snippet('header') ?>

<main>
  <section class="intro">
    <h1>Blog</h1>
  </section>

  <section class="text">
    <?= $page->presentation()->kt() ?>
  </section>

  <section class="articles">
    <?php foreach($page->children()->listed()/*->flip()*/ as $article): ?>
      <div class="article text">
        <h3><?= $article->title()->link() ?></h3>
        <?php if ($article->published()->toDate() != 0): ?>
          <span>
            <?= strftime("%d %B %Y", $article->published()->toDate()) ?>
          </span>
        <?php endif ?>
        <p><?= $article->subtitle().html() ?></p>
      </div>
    <?php endforeach ?>
  </section>

  <section class="text" id="outro">
    <?= $page->outro()->kt() ?>
  </section>
</main>

<?php snippet('footer') ?>
