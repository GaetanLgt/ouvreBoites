<?php
$context = Timber::context();
$context['post'] = Timber::get_post();
$context["acf"] = get_field_objects($data["post"]->ID);
Timber::render( 'calendrier.twig', $context );