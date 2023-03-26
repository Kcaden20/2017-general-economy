<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>

    </div>
    <br/><br/
  </main>

<?php snippet('footer') ?>