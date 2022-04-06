<?php
$context = Timber::context();
$context['posts'] = Timber::get_posts();

Timber::render( 'error.twig', $context );