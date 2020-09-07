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

<script type="text/javascript">
function loadResource(e) {
  let resourceType = null;
  let resourceSource = "";
  let resourceElement = null;
  if (!!e.target.getAttribute('data-youtube-id')) {
    resourceType = "youtube";
    resourceSource = e.target.getAttribute('data-youtube-id');
  } else if (!!e.target.getAttribute('data-peertube-id')) {
    resourceType = "peertube";
    resourceSource = e.target.getAttribute('data-peertube-id');
  } else if (!!e.target.getAttribute('data-facebook-id')) {
    resourceType = "facebook";
    resourceSource = e.target.getAttribute('data-facebook-id');
  }

  if (resourceType === "youtube" || resourceType === "peertube" || resourceType === "facebook") {
    resourceElement = document.createElement("iframe");
    resourceElement.classList.add("video");
    let url = "";
    if (resourceType === "youtube") {
      url = "https://www.youtube.com/embed/" + resourceSource + "?autoplay=1";
      resourceElement.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");
    } else if (resourceType === "peertube") {
      url = "https://peertube.social/videos/embed/" + resourceSource + "?autoplay=1";
      resourceElement.setAttribute("sandbox", "allow-same-origin allow-scripts");
    } else if (resourceType === "facebook") {
      url = "https://www.facebook.com/plugins/video.php?href=" + resourceSource + "&show_text=0&autoplay=1";
      resourceElement.setAttribute("allowTransparency", "true");
      resourceElement.setAttribute("allowFullScreen", "true");
      resourceElement.setAttribute("scrolling", "no");
    }
    resourceElement.setAttribute("src", url);
    resourceElement.setAttribute("frameborder", "0");
    resourceElement.setAttribute("allowfullscreen", "true");
  }

  if (!!resourceElement) {
    e.target.appendChild(resourceElement);
    e.target.onclick = null;
    let loaded = false;
    e.target.classList.add("resource-loading");
    resourceElement.onload = () => {
      loaded = true;
      e.target.classList.add("resource-loaded");
    };
    setTimeout(() => {
      // In case it didn't load, show error
      let errorTextElement = document.createElement("p");
      errorTextElement.textContent = "Impossible de se connecter à " + resourceType + ". Vérifiez votre connexion et réessayez.";
      if (!loaded) {
        e.target.appendChild(errorTextElement);
      } else {
        e.target.classList.remove("resource-loading");
      }
    }, 10000);
  }
}

document.querySelectorAll(".load-resource").forEach(item => item.onclick = loadResource);
</script>

<?php snippet('footer') ?>
