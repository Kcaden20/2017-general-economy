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