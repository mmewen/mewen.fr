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

  <link rel="icon" type="image/png" href="assets/icons/favicon.png">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> <?= $page->title() ?></title>
  <meta property="description" content="<?= $site->description() ?>" />

  <!-- Social media meta data -->
  <meta property="og:site_name" content="<?= $site->title() ?> - <?= $page->title() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="/assets/images/default.jpg" />
  <meta property="og:locale:alternate" content="fr_FR" />
  <meta property="og:fb:admins" content="105057877735885" />
  <meta property="og:url" content="<?= $page->url() ?>" />
  <meta property="og:description" content="<?= $site->description() ?>" />
  <meta name="twitter:title" content="<?= $site->title() ?> - <?= $page->title() ?>" />
  <meta name="twitter:card" content="<?= $site->description() ?>" />

  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file. 
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?= css(['assets/css/index.css', 'assets/css/flex.css', 'assets/css/overlay.css', '@auto']) ?>

</head>
<body>

  <div class="page">
    <header class="header">
      <!-- In this link we call `$site->url()` to create a link back to the homepage -->
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">
        <?php 
        // In the menu, we only fetch listed pages, i.e. the pages that have a prepended number in their foldername
        // We do not want to display links to unlisted `error`, `home`, or `sandbox` pages
        // More about page status: https://getkirby.com/docs/reference/panel/blueprints/page#statuses
        foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header>

