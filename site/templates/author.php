<?php snippet('header') ?>
  <main class="main" role="main">


    <article class="article single wrap  scene_element scene_element--fadein">
      <header class=" article article-header">

        <h1 class="article-title big"><?= $page->name()->html() ?></h1>
        <div class="text wrap scene_element scene_element--fadein" >
        </div>

        <div class="article-details">
        <div class="tag-list no-margin-top">
        <li class="tag-item"><h3><a href="<?php echo $page->website() ?>">
          <?php if($page->website()->isNotEmpty()): ?>
              Website
           <?php endif ?>
        </a></h3></li>
        <li class="tag-item"><h3><a href="mailto: <?php echo $page->email() ?>">
            <?php if($page->email()->isNotEmpty()): ?>
              Email
           <?php endif ?>
        </a></h3></li>
        <li class="tag-item"><h3><a href="https://twitter.com/<?php echo $page->twitter() ?>">
            <?php if($page->twitter()->isNotEmpty()): ?>
              <?php echo $page->twitter() ?>
           <?php endif ?>
        </a></h3></li>
        </div>
        </div>

      </header>
      <div class="text">
        <?php echo $page->biography()->kirbytext();
             ?> <br/><br/>
      </div>
      <h2>Articles </h2>
      <?php $articles = $pages->find('archive')->children() ?>
      <?php $author = $page->name() ?>
            <ul class="articles">
    <?php foreach($articles->filterBy('author', $author->name()) as $article): ?>
    <li><a href="<?php echo $article->url() ?>"><?php echo $article->title() ?></a></li>
    <?php endforeach ?>
  </ul>
    </article>
  </main>

<?php snippet('footer') ?>