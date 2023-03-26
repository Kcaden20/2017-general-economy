<?php snippet('header') ?>

  <main class="main m-scene" role="main">
        <h1 class="ft-title"><?= $page->title()->kirbytext() ?></h1>
                    <div class="intro text">
        <?= $page->Text()->kirbytext() ?>
      </div>
    <section class="wrap m-header scene_element scene_element--fadein" >


<!-- Search -->
<div class="search-bar-wrap">
  <div class="search-container">
    <div class="search-icon-btn">
      <img src="/general-economy/assets/images/maginifying-glass.png">
      <i class="fa fa-search"></i>
    </div>
    <div class="search-input">
      <form>
      <input class="search-bar" type="text" name="q" autocomplete="off" value="Search..." onfocus="if (this.value=='Search...') this.value='';">
      </form>
    </div>
  </div>
</div>

  <div class="show-tags">
    <h3>Search by Tags</h3>
  </div>
    <ul class="tag-list hide-tags">
  <?php
    sort($tags);

    foreach ( $tags as $tag ) : ?>
    <li class="tag-item <?php if ( $tags == urlencode( param( 'tag' ) ) ) : ?> is-active  <?php endif; ?>">
      <a href="<?php echo url('archive/tag:' . urlencode($tag))?>"><?= $tag ?></a>
    </li>
  <?php endforeach ?>
</ul>

<?php if(get('q')): ?>
  <?php if($results->count()) : ?>
  <div id="searchwrap">
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
  <div id="searchwrap">
    <p>Sorry! Couldn't find anything with that search! </p>
  </div>
  <?php endif ?>
<?php endif ?>

    </section>


<!-- Tag List -->
    <section class="wrap m-header scene_element scene_element--fadein" >


<!-- The Archive Listing -->
  <div id="arch-wrap">
   <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>
          <article class="arch-article index" >

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

              <h3 class="article-subtitle"> <?= $article->subtitle()->html() ?></h3>
              <div class="article-details">
                <h4 class="article-author"> <?= $article->author()->html() ?> —</h4>
                <p class="article-date"∂><?= $article->date('F jS, Y') ?></p>
              </div>
            </header>

          </article>
        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>

      </div>
    </section>
<div id="searchpagesnip"> <?php snippet('pagination') ?> </div>
  </main>

<?php snippet('footer') ?>

    <script>
      var results = <?php echo $results->count() ?>;
      var archive = document.getElementById('arch-wrap');
      var search = document.getElementById('searchwrap');
      var pagination = document.getElementById('searchpagesnip');
      var pageLimit = <?php echo $pageLimit ?>;


      if(window.location.href.indexOf("archive?q=") > -1) {
        archive.remove();
        pagination.className="displaysearch"
        if(results < pageLimit && window.location.href.indexOf("page") < 1) {
          pagination.remove();
        }
      } else {}

      $( ".show-tags" ).click(function() {
        $(".tag-list").toggleClass("hide-tags");
      });
    </script>