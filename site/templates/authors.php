<?php snippet('header') ?>
<?php $articles = $pages->find('archive')->children() ?>
<main class="main m-scene" role="main">
<section class="wrap m-header scene_element scene_element--fadein" >
<h1>Authors</h1>
<?php foreach($page->children() as $author): ?>
<article class="author">

  <h1><?php echo $author->name()->html() ?></h1>

  <ul class="articles">
    <?php foreach($articles->filterBy('author', $author->name()) as $article): ?>
    <li><a href="<?php echo $article->url() ?>"><?php echo $article->title() ?></a></li>
    <?php endforeach ?>
  </ul>

</article>
<?php endforeach ?>
 </section>
</main>
<?php snippet('footer') ?>