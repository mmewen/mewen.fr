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

  <?php
  $first = true;
  $project_lists = [];
  
  if ($page->project_list_1_title() != "") {
    $project_lists[] = [$page->project_list_1_title(), $page->project_list_1()];
  }
  if ($page->project_list_2_title() != "") {
    $project_lists[] = [$page->project_list_2_title(), $page->project_list_2()];
  }
  foreach ($project_lists as [$project_title, $project_list]): ?>
    <section class="projects">
      <h1><?= $project_title ?></h1>
      <div class="flex align-start space-around">
        <?php
        $projects = $project_list->toStructure();
        foreach ($projects as $project): ?>
        <article class="project d6 m12 text">
          <h2><?= $project->title() ?></h2>
          <i><?= $project->subtitle() ?></i>
          <p><?= $project->details()->kt() ?></p>
        </article>
        <?php endforeach ?>
      </div>
    </section>

    <?php if ($first):
        $first = false; ?>
        <?= $page->custom_block() ?>
    <?php endif ?>

  <?php endforeach ?>

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
