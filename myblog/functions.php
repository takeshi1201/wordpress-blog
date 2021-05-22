<?php 
add_action('init', function() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  // メニューサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
  ]);
});

/*アイキャッチ画像の再利用関数*/
function get_eyecatch_width_default() {
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
  endif;
  return $img;
}

