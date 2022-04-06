<?php
$context = Timber::context();

$the_query = array(
    'posts_per_page' => 6,
    'category_name' => 'articles', // this is the category SLUG
);
$context['posts'] = new Timber\PostQuery($the_query);

$args = [
    'post_type' => 'poles',
];
$context['presentation'] = Timber::get_post();
$context['poles'] = new Timber\PostQuery($args);
//$context['logo'] = the_custom_logo( $blog_id = 0 );
Timber::render( 'accueil.twig', $context );

