<?php
  add_action('wp_enqueue_scripts', 'add_styles');
  add_action('wp_enqueue_scripts', 'add_scripts');

  function add_styles() {
    // google fonts
    wp_register_style(
      'google-fonts_style',
      'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap',
      array(),
      '1.0'
    );

    // reset style
    wp_register_style(
      'reset_style',
      get_template_directory_uri() . '/css/reset.css',
      array(),
      '1.0'
    );

    if (is_page('about')) {
      // about style
      wp_enqueue_style(
        'about_style',
        get_template_directory_uri() . '/css/about.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
      );
    } elseif (is_page('contact')) {
      // contact style
      wp_enqueue_style(
        'contact_style',
        get_template_directory_uri() . '/css/contact.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
      );
    } else {
      // main style
      wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
      );
    }

  }
  function add_scripts() {
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');

    // jQueryを読み込む
    wp_register_script(
      'jquery_script',
      'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js',
      array(),
      '1.0'
    );
  
    // メインのスクリプトを読み込む
    wp_enqueue_script(
      'main_script',
      get_template_directory_uri() . '/js/script.js',
      array('jquery_script'),
      '1.0'
    );
}
?>