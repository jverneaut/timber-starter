<?php

use Timber\Timber;

$context = Timber::context();
$context['post'] = Timber::query_post();

Timber::render('single.twig', $context);
