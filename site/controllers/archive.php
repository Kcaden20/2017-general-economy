<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {
  $query   = get('q');
  $results = page('archive')->search($query, 'title|author|text|tags');
  $pageLimit = 18;
  $results = $results->paginate($pageLimit);
  $articles = $page->children()->visible()->flip();
  $tags = $articles->pluck('tags', ',', true);
  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }


  // apply pagination
  $articles = $articles->paginate($pageLimit);
  return array(
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination(),
    'articles'   => $articles,
    'pagination' => $articles->pagination(),
    'pageLimit'  => $pageLimit,
    'tags'       => $tags
  );


};




