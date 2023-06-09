<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

  $perpage  = $page->perpage()->int();
  $articles = $page->children()
                   ->visible()
                   ->flip()
                   ->paginate(($perpage >= 1)? $perpage : 5);

  return [
    'articles'   => $articles,
    'pagination' => $articles->pagination()
  ];

};

  return function($site, $pages, $page) {

    $tag = urldecode(param('tag'));
    if($tag) {
    	$articles = page('blog')->children()->visible()->filterBy('tags', $tag,',')->sortBy('date')->flip();
    } else {
    	$articles = page('blog')->children()->visible()->sortBy('date')->flip();
    }

     return compact('articles');

};
