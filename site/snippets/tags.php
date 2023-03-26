<ul class="tag-list no-margin-top">
  <?php  foreach(str::split($page->tags(),',') as $tag): ?>
    <li class="tag-item">
      <a href="<?php echo url('archive/tag:' . urlencode($tag))?>">
        <?php echo $tag ?>
      </a>
    </li>
   <?php endforeach ?>
</ul>