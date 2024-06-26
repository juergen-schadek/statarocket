<?php

use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::statamic('feed', 'feed', [
    'layout' => 'rss',
    'content_type' => 'atom',
]);

Route::statamic('authors/{author}', 'authors.show', [
    'title' => 'Autor',
]);
