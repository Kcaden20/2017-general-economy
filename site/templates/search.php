<?php snippet('header') ?>
<main class='main searchpage' role="main">
<section class=" wrap scene_element scene_element--fadein">


<form >
  <input class="searchbar" type="text" name="q" autocomplete="off" value="Search..." onfocus="if (this.value=='Search...') this.value='';">
</form>

<?php if(get('q')): ?>
  <?php if($results->count()) : ?>
  <div class="articlewrap">
      <?php foreach($results as $result): ?>
          <article class="arch-article index" >

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $result->url() ?>"><?= $result->title()->html() ?></a>
              </h2>

              <h3 class="article-subtitle"> <?= $result->subtitle()->html() ?></h3>
              <div class="article-details">
                <h4 class="article-author"> <?= $result->author()->html() ?> —</h4>
                <p class="article-date"∂><?= $result->date('F jS, Y') ?></p>
              </div>
            </header>

          </article>
      <?php endforeach ?>
    </div>
  <?php else : ?>
    <p>Sorry! Couldn't find anything with that search! </p>
  <?php endif ?>
<?php endif ?>
<?php snippet('pagination') ?>
</section>
</main>
<?php snippet('footer') ?>