<?php
$context = Timber::context();
$context['posts'] = Timber::get_posts();
$context['categorie'] = Timber::get_terms('category');
Timber::render( 'articles.twig', $context );

