<?php snippet('header') ?>
  <main class="main" role="main">
    <article class="article single wrap  scene_element scene_element--fadein">
      <header class=" article article-header">
        <h1 class="article-title big"><?= $page->title()->html() ?></h1>
        <h2 class="article-subtitle"><?= $page->subtitle()->html() ?></h2>
        <p></p>
        <div class="article-details">
        <h1><?php echo $page->author() ?></h1>
        <p class="article-date">
          <?= $page->date('F jS, Y') ?>
          <br/>
        </p>
        </div>
        <p class="article-estimate">
          <?php snippet('readingtime') ?>
        </p>

      </header>
      <div class="text">
        <?= $page->text()->footnotes()->kirbytext();
        ?>
      </div>
      <?php snippet('tags')?>
    </article>
    <?php snippet('prevnext', ['flip' => true]) ?>
  </main>

<?php snippet('footer') ?>