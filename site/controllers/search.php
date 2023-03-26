<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = page('archive')->search($query, 'title|text');
  $results = $results->paginate(3);

  return array(
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  );

};