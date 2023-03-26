<?php
return function($site, $pages, $page) {
    // fetch the projects
    $projects = page('home')->children()->visible();

    // fetch all authors used in projects
    $authors = $projects->pluck('authors', ',', true);

    // fetch authors used by current project
    $projectauthors = $page->authors()->split(',');

    // add the author filter
    $author = urldecode(param('author'));
        if(param('author')) {
      $projects = $projects->filterBy('authors', $author, ',');
    }

    // Return values to template
    return compact('projects', 'authors', 'projectauthors', 'author');
};
?>