<?php snippet('header') ?>

<main>
  <section class="cover-container">
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
  </section>


  <section class="projects">
    <h1><?= $page->project_title()->html() ?></h1>
    <?php
    $projects = $page->projects()->toStructure();
    foreach ($projects as $project): ?>
    <article class="project flex strech">
      <div class="player m12 load-resource" data-youtube-id="<?= $project->youtube() ?>" data-peertube-id="<?= $project->peertube() ?>" data-facebook-id="<?= $project->facebook() ?>">
        <img src="<?= $project->thumbnail()->toFile()->url() ?>">
      </div>
      <div class="fill project-description">
        <h2><?= $project->title() ?></h2>
        <?= $project->description()->kt() ?>
        <div class="project-info note"><?= $project->client() ?></div>
        <time class="project-info note"><?= $project->published()->toDate('m/Y') ?></time>
      </div>
    </article>
    <?php endforeach ?>
  </section>

  <section class="text">
    <?= $page->text()->kt() ?>
  </section>

  <section class="contact-container">
    <div class="contact">
      <?= $page->contact_text()->kt() ?>

      <?= html::email($site->email()) ?>
      <?= html::tel($site->phone()) ?>
    </div>
  </section>
</main>

<?php snippet('footer') ?>
