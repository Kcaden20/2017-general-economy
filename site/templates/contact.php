<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>      
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>    
      <hr />      
    </header>
      
    <div class="contact-twitter text wrap cf">
      <?= $page->text()->kirbytext() ?>
    </div>
    
  </main>

<?php snippet('footer') ?>