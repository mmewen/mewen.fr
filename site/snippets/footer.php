<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

  </div>

  <footer class="footer flex">
    <div class="d4 m12">
      <address class="text">
          <?= html::email($site->email()) ?> <br>
          <?= html::tel($site->phone()) ?>
      </address>
    </div>

    <div class="d4 m12 text">
      <span class="note">Afin de réduire son empreinte environnementale, ce site a été conçu selon les principes du numérique low tech.</span>
    </div>

    <div class="d4 m12 text">
      <a href="/mentions-legales">Mentions légales</a>
    </div>

<!--     <section>
      <h2>On the web</h2>
      <div class="text">
        <ul>
          <?php foreach ($site->social()->toStructure() as $social): ?>
          <li><?= html::a($social->url(), $social->platform()) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
    </section>


    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <?php if ($about = page('about')): ?>
    <nav class="social">
      <?php foreach ($about->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <?php endif ?> -->
  </footer>

</body>
</html>
