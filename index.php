<?php

use Timber\Timber;

$context = Timber::context();

// Articles are available by default under the `posts` variable.
// This is a proof of concept query.
$context['articles'] = Timber::get_posts('post_type = article');

Timber::render('index.twig', $context);
