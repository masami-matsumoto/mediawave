<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="Description" content="<?php bloginfo( 'description' ); ?>" />	
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="images/favicon.png"	size="32×32" type="image/png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base/default.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout/default.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/module/modules.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/parts/parts.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/module/c-module.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case-study/app.css">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/android-icon.png">
<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>	
</head>

<body>
<?php if( is_post_type_archive('case-study') || is_search('search') || is_singular('case-study')): ?>
<div id="wrapper" class="ccm-page page">
<?php endif; ?>
<div id="wrapper">
  <div class="bg01"><img src="<?php echo get_template_directory_uri(); ?>/images/bk.png" alt=""/></div>
  <!-- gobal navigation -->
  <header class="l-content-expanded header">
    <h1 class="header-logo"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="株式会社メディアウェイブのロゴ"/></a></h1>
    <div class="openbtn"><span></span><span></span><span></span></div>
    <nav class="nav nav_flex" id="g-nav">
		<?php wp_nav_menu(
          array(
              'theme_location' => 'place_global',
              'container' => false,
              'menu_class' => 'nav-menu',
              'add_li_class' => 'nav-menu-item', // liタグへclass追加
              )
              );
		?>
		<?php wp_nav_menu(
          array(
              'theme_location' => 'place_contact',
              'container' => false,
              'menu_class' => 'nav-menu nav-menu-contact',
              'add_li_class' => 'nav-menu-item nav-menu-item-contact', // liタグへclass追加
              'add_a_class' => 'btn btn_highlighted btn_menuitem' // aタグへclass追加
              )
              );
		?>
    </nav>
  </header>
