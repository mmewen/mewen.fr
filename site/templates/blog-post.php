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

<main>
  <section class="intro">
    <h2><?= $page->title()->html() ?></h2>
  </section>

  <section class="text">
    <div class="text">
      <?= $page->text()->kt() ?>
    </div>

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

  </section>
</main>

<?php snippet('footer') ?>
