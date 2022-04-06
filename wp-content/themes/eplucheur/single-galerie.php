<?php
$context = Timber::context();
$context['post'] = Timber::get_post();
global $paged;
if (!isset($paged) || !$paged) {
    $paged = 1;
}

$args = [
    'post_type' => 'galerie',
    'posts_per_page' => 5,
    'paged' => $paged,
];
$context['images'] = new Timber\PostQuery($args);

Timber::render('image.twig', $context);
