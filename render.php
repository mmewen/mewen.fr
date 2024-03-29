<?php

require __DIR__ . '/kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'index'  => __DIR__,
        'assets' => __DIR__ . '/assets',
        'static' => $static = __DIR__ . '/static',
        'media' => $static . '/media',
    ],
    'urls' => [
        'index' => '/'
    ],
    'markdown' => [
        'extra' => true
    ]
]);

function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
}

setlocale(LC_ALL, 'fr_FR.UTF-8'); // because of some weird bug with strftime at render.

// Render all the pages
foreach ($kirby->site()->index() as $page) {

    $html = $page->render();

    if ($page->isHomePage()) {
        $file = $kirby->root('static') . '/index.html';
    } else {
        $file = $kirby->root('static') . '/' . $page->id() . '/index.html';
    }

    F::write($file, $html);

    // Copy the page files
    foreach ($page->files() as $page_file) {
        $page_file->publish();
    }

}

// Copy the assets
recurse_copy($kirby->root('assets'), $kirby->root('static') . '/assets');

// Copy robots.txt
copy("robots.txt", "static/robots.txt"); 

// End
echo 'Your static site has been generated in ' . $kirby->root('static');
