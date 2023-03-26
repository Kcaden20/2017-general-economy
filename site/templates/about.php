<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap">

      <header class="m-header scene_element scene_element--fadein">
        <h1 class="ft-title"><?= $page->title()->html() ?></h1>
      </header>

      <div class="text wrap scene_element scene_element--fadein" >
        <?= $page->about()->kirbytext() ?>
      </div>

    </div>
      <hr class="scene_element scene_element--fadein"/>
    <section class="team wrap wide m-header scene_element scene_element--fadein">
      <h2>Contributors </h2>
      <div class="text wrap scene_element scene_element--fadein" >
        <?= $page->contributor()->kirbytext() ?>
      </div>
      <ul class="tag-list no-margin-top">

      <?php foreach(page('authors')->children() as $author): ?>
        <li class="tag-item"><h3><a href="<?php echo $author->url() ?>"><?php echo $author->name()->html() ?></a></h3></li>
        <?php endforeach ?>
      </ul>
    </section>

  </main>

<?php snippet('footer') ?>