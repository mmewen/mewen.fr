<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. * 
 * This default template must not be removed. It is used whenever Kirby cannot find a template with the name of the content file.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>
<?php snippet('header') ?>

<!-- <nav class="breadcrumb text" aria-label="breadcrumb">
  <ol>
    <?php foreach($site->breadcrumb()->offset(1) as $crumb): ?>
    <li>
      <a href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
        <?= html($crumb->title()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ol>
</nav> -->

<main>
  <section class="intro">
    <?php if ($page->parent()->template() != "blog"): ?>
      <h2><?= $page->parent()->title()->html() ?></h2>
    <?php endif ?>
    <h1><?= $page->title()->html() ?></h1>
    <h2 class="subtitle"><?= $page->subtitle()->html() ?></h2>
  </section>

  <section class="text">
  </section>

  <section class="text">
    <div class="text">
      <?= $page->introduction()->kt() ?>

      <?php if ($page->children()->count() > 0): ?>
        <h2>Chapitres</h2>
        <ul>
          <?php foreach($page->children()->listed()/*->flip()*/ as $article): ?>
          <li><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

      <?= $page->text()->kt() ?>
    </div>

    <?php if ($page->parent()->template() != "blog"): ?>
      <div class="blog-nav">
        <?php if ($page->hasPrevListed()): ?>
          <div id="previous-post">
            <a href="<?= $page->prevListed()->url() ?>"><?= $page->prevListed()->title() ?></a>
          </div>
        <?php else: ?>
          <div></div>
        <?php endif ?>

        <div>
          <a href="<?= $page->parent()->url() ?>">Sommaire</a>
        </div>

        <?php if ($page->hasNextListed()): ?>
          <div id="next-post">
            <a href="<?= $page->nextListed()->url() ?>"><?= $page->nextListed()->title() ?></a>
          </div>
        <?php else: ?>
          <div></div>
        <?php endif ?>
      </div>
    <?php endif ?>

  </section>
</main>

<?php snippet('footer') ?>
