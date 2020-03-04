<?php

// Add Formats button
function add_mce_format_button($buttons)
{
  array_unshift($buttons, 'styleselect');
  array_unshift($buttons, 'fontsizeselect');

  return $buttons;
}
add_filter('mce_buttons_2', 'add_mce_format_button');

// Add theme styles to formats array
function add_mce_styles($init_array)
{
  $style_formats = [
    [
      'title' => 'Titres',
      'items' => [
        [
          'title' => 'Titre 1',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'title-1',
          'wrapper' => true,
        ],
        [
          'title' => 'Titre 2',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'title-2',
          'wrapper' => true,
        ],
        [
          'title' => 'Titre 3',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'title-3',
          'wrapper' => true,
        ],
        [
          'title' => 'Titre 4',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'title-4',
          'wrapper' => true,
        ],
        [
          'title' => 'Titre 5',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'title-5',
          'wrapper' => true,
        ],
      ],
    ],
    [
      'title' => 'Options de texte',
      'items' => [
        [
          'title' => 'Texte majuscule',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'text-uppercase',
          'wrapper' => true,
        ],
      ],
    ],
    [
      'title' => 'Boutons',
      'items' => [
        [
          'title' => 'Bouton primaire',
          'selector' => 'a',
          'classes' => 'btn btn-primary',
        ],
      ],
    ],
    [
      'title' => 'Marge',
      'items' => [
        [
          'title' => 'mt-1',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'mt-1',
          'wrapper' => true,
        ],
        [
          'title' => 'mt-2',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'mt-2',
          'wrapper' => true,
        ],
        [
          'title' => 'mt-3',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'mt-3',
          'wrapper' => true,
        ],
        [
          'title' => 'mt-4',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'mt-4',
          'wrapper' => true,
        ],
        [
          'title' => 'mt-5',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'mt-5',
          'wrapper' => true,
        ],
        [
          'title' => 'mt-6',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'mt-6',
          'wrapper' => true,
        ],
        [
          'title' => 'mt-7',
          'selector' => 'p, h1, h2, h3, h4, h5, h5, span',
          'classes' => 'mt-7',
          'wrapper' => true,
        ],
      ]
    ]
  ];

  $init_array['style_formats'] = json_encode($style_formats);

  return $init_array;
}
add_filter('tiny_mce_before_init', 'add_mce_styles');

// Load styles in TinyMCE editor
function add_editor_styles()
{
  $themeUri = get_template_directory_uri();
  add_editor_style($themeUri . '/dist/style.css');
}
add_action('admin_init', 'add_editor_styles');

// Remove Gutenberg font styles https://stackoverflow.com/a/58783057
add_filter('block_editor_settings', 'remove_guten_wrapper_styles');
function remove_guten_wrapper_styles($settings)
{
  unset($settings['styles'][0]);
  return $settings;
}
