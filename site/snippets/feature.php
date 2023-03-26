<?php
$featuredArticles = page('archive')->children()->sortBy('date', 'desc')->filterBy('feature', '==', 'yes')->limit(4);
foreach($featuredArticles as $article): ?>
     <article class="article index large-screen" >
        <header class="article-header">
          <div class="ftimg">
          <a href="<?= $article->url() ?>">
            <?php echo $article->featureimage()->toFile() ?>
            </a>
            </div>
          <h2 class="article-title">
            <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
          </h2>

          <h3 class="article-subtitle"> <?= $article->subtitle()->html() ?></h3>
          <div class="article-details">
            <h4 class="article-author"> <?= $article->author()->html() ?> —</h4>
            <p class="article-date"∂><?= $article->date('F jS, Y') ?></p>
          </div>

        </header>

        <div class="text">
          <p>
            <?= $article->text()->kirbytext()->excerpt(30, 'words') ?>
            <a href="<?= $article->url() ?>" class="article-more">read more</a>
          </p>
        </div>
      </article>
<?php endforeach ?>

