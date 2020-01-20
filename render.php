<?php

require __DIR__ . '/kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'index'  => __DIR__,
        'assets' => __DIR__ . '/assets',
        'media' => __DIR__ . '/media',
        'static' => __DIR__ . '/static'
    ],
    'urls' => [
        'index' => '/'
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
    foreach ($page->files() as $file) {
        $dst = $kirby->root('static') . $file->url();
        mkdir(dirname($dst), 0744, TRUE);
        copy($kirby->root() . $file->url(), $dst); 
    }

}

// Copy the assets
recurse_copy($kirby->root('assets'), $kirby->root('static') . '/assets');

// End
echo 'Your static site has been generated in ' . $kirby->root('static');
