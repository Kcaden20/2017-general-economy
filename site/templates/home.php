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
    <br/><br/>
    <section class="wrap m-header scene_element scene_element--fadein">
    <h1 class="ft-title">Featured</h1>
    <div class="ft-wrap">
    <?php snippet('feature') ?>
    </div>
    <h1 class="ft-title">Latest</h1>
    <?php snippet('latest') ?>
    </section>
      <div class="show-tags" id="home-read-more">
    <a href="<?php echo page('archive')->url() ?>"><h3>Read More</h3></a>
  </div>
  </main>
  <?php snippet('footer') ?>
