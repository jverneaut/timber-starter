<?php

use Timber\Timber;

function register_acf_block_dummy()
{
  acf_register_block_type(array(
    'name' => 'block-dummy',
    'title' => __('Block - Dummy'),
    'render_callback' => 'render_block_dummy',
    'category' => 'theme',
    'icon' => 'grid-view',
    'align' => 'full',
    'keywords' => array('dummy'),
  ));
}

if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_dummy');
}

function render_block_dummy($block, $content = '', $is_preview = false, $post_id)
{
  $context = Timber::context();
  $post = new TimberPost($post_id);

  $context['post'] = $post;
  $context['block'] = $block;
  $context['fields'] = get_fields();
  $context['is_preview'] = $is_preview;

  Timber::render('blocks/dummy.twig', $context);
}
