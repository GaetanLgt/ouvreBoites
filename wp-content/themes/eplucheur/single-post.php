<?php
$context = Timber::context();
$context['post'] = Timber::get_post();
$context['categorie'] = Timber::get_terms('category');
Timber::render( 'article.twig', $context );

