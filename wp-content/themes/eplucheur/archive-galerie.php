<?php


$context = Timber::context();
//$context = Timber::get_context();
$args3 = array(
	// Get post type project
	'post_type' => 'galerie',
	// Get all posts
	'posts_per_page' => -1,
	
	// Order by post date
	);
	
$context['posts'] = Timber::get_posts( $args3 );


//////////////////////////////////
global $paged;
	if (!isset($paged) || !$paged){
		$paged = 1;
	}
	//$context = Timber::context();
	$args2 = array(
		'post_type' => 'galerie',
		'posts_per_page' => 3,
		'paged' => $paged
	);
$context['displayImage'] = new Timber\PostQuery($args2);

////////////////////////////////////

$context['categorie'] = Timber::get_terms('categories');

Timber::render( 'galerie.twig', $context );