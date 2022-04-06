<?php
$context = Timber::context();
$context['posts'] = Timber::get_posts();
$context['categorie'] = Timber::get_term('category');
Timber::render( 'categories.twig', $context );