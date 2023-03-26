<?php
$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="pagination <?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($prev = $page->prevVisible()): ?>
      <a class="pagination-item <?= $directionPrev ?>" href="<?= $prev->url() ?>" rel="prev" title="<?= $prev->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </a>
    <?php else: ?>
      <a class="pagination-item <?= $directionPrev ?>" href="<?= $page->siblings()->last()->url() ?>" rel="prev" title="<?= $page->siblings()->last()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </a>

    <?php endif ?>

    <?php if($next = $page->nextVisible()): ?>
      <a class="pagination-item <?= $directionNext ?>" href="<?= $next->url() ?>" rel="next" title="<?= $next->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
      </a>
    <?php else: ?>
      <a class="pagination-item <?= $directionNext ?>" href="<?= $page->siblings()->first()->url() ?>" rel="next" title="<?= $page->siblings()->first()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
      </a>
    <?php endif ?>

  </nav>
<?php endif ?>