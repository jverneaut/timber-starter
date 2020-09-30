<?php

use Timber\Timber;

$context = Timber::context();
$context['post'] = new TimberPost();

Timber::render('404.twig', $context);
