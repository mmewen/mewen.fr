<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link rel="icon" type="image/png" href="/assets/icons/favicon.png">

  <?php
  // Prepare title
  if ($page->id() == "home") {
    $title = $site->title();
  } else {
    $title = $page->title()." - ".$site->title();
  }
  $title = html($title);

  // Prepare image
  if ($page->share_image()->toFile()) {
    $image = $page->share_image()->toFile()->url();
  } else if ($page->cover()->toFile()) {
    $image = $page->cover()->toFile()->url();
  } else {
    $image = 'assets/images/default.jpg';
  }
  $image = Url::makeAbsolute($image);
  ?>
  <title><?= $title ?></title>
  <meta property="description" content="<?= $site->description() ?>" />

  <!-- Social media meta data -->
  <meta property="og:site_name" content="<?= $site->title() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?= $image ?>" />
  <meta property="og:locale:alternate" content="fr_FR" />
  <meta property="og:fb:admins" content="105057877735885" />
  <meta property="fb:app_id" content="251220228247710" />
  <meta property="og:url" content="<?= Url::makeAbsolute(Url::path($page->url(), false, true)) ?>" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:description" content="<?= $site->description() ?>" />
  <meta name="twitter:title" content="<?= $title ?>" />
  <meta name="twitter:card" content="<?= $site->description() ?>" />

  <?= css(['assets/css/index.css', 'assets/css/flex.css', 'assets/css/overlay.css', '@auto']) ?>

</head>
<body>

  <div class="page">
    <header class="header">
      <a class="logo" href="<?= $site->url() ?>"><!-- <?= $site->title() ?> --></a>

      <nav id="menu" class="menu">
        <?php 
        foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header>

