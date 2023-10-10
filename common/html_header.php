<?php
/**
 * Common Template
 *
 * BOOTSTRAP v3.5.0
 *
 * outputs the html header. i,e, everything that comes before the \</head\> tag <br />
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All 2020 May 12 Modified in v1.5.7 $
 */

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

$zco_notifier->notify('NOTIFY_HTML_HEAD_START', $current_page_base, $template_dir);

// Prevent clickjacking risks by setting X-Frame-Options:SAMEORIGIN
header('X-Frame-Options:SAMEORIGIN');

/**
 * load the module for generating page meta-tags
 */
require DIR_WS_MODULES . zen_get_module_directory('meta_tags.php');

// -----
// Define a set of preloaded css/js files.  Done here in array since it's
// important that the preload matches the actual <link>/<script> parameters.
//
$preloads = [
    'jquery' => [
        'link' => 'https://code.jquery.com/jquery-3.5.1.min.js',//https://code.jquery.com/jquery-3.7.0.min.js
        'integrity' => 'sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=', //sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=
    ],
    'bscss' => [
        'link' => 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
        'integrity' => 'sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N',
    ],
    'bsjs' => [
        'link' => 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
        'integrity' => 'sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct',
    ],
   'fa' => [
        'link' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        'integrity' => 'sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==',
    ],
/*
<link rel="stylesheet" href="<?php echo $preloads['fa']['link']; ?>" integrity="<?php echo $preloads['fa']['integrity']; ?>" crossorigin="anonymous" referrerpolicy="no-referrer">	
	*/
];
?>
<!DOCTYPE html>
<html <?php echo HTML_PARAMS; ?>>
  <head>
<?php
// -----
// Provide a notification that the <head> tag has been rendered for the current page.
//
$zco_notifier->notify('NOTIFY_HTML_HEAD_TAG_START', $current_page_base);

// -----
// Provide an easy way for a site to disable the preload, if they want to ensure
// that it's working properly.  Just create a .php file in either /extra_configures or
// /extra_datafiles that sets $bs4_no_preloading to a 'truthy' value.
//
if (!empty($bs4_no_preloading)) {
?>
    <link rel="preload" href="<?php echo $preloads['bscss']['link']; ?>" integrity="<?php echo $preloads['bscss']['integrity']; ?>" crossorigin="anonymous" as="style">
    <link rel="preload" href="<?php echo $preloads['fa']['link']; ?>" integrity="<?php echo $preloads['fa']['integrity']; ?>" crossorigin="anonymous" referrerpolicy="no-referrer" as="style">
    <link rel="preload" href="<?php echo $preloads['jquery']['link']; ?>" integrity="<?php echo $preloads['jquery']['integrity']; ?>" crossorigin="anonymous" as="script">
    <link rel="preload" href="<?php echo $preloads['bsjs']['link']; ?>" integrity="<?php echo $preloads['bsjs']['integrity']; ?>" crossorigin="anonymous" as="script">
<?php
}
?>
    <meta charset="<?php echo CHARSET; ?>">
    <title><?php echo META_TAG_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo META_TAG_KEYWORDS; ?>">
    <meta name="description" content="<?php echo META_TAG_DESCRIPTION; ?>">
    <meta name="author" content="<?php echo STORE_NAME ?>">
    <meta name="generator" content="shopping cart program by Zen Cart&reg;, https://www.zen-cart.com eCommerce">
    <?php if (defined('ROBOTS_PAGES_TO_SKIP') && in_array($current_page_base, explode(",", constant('ROBOTS_PAGES_TO_SKIP'))) || $current_page_base == 'down_for_maintenance' || $robotsNoIndex === true) { ?>
      <meta name="robots" content="noindex, nofollow">
    <?php } ?>
    <?php if (defined('FAVICON')) { ?>
      <link href="<?php echo FAVICON; ?>" type="image/x-icon" rel="icon">
      <link href="<?php echo FAVICON; ?>" type="image/x-icon" rel="shortcut icon">
    <?php } //endif FAVICON  ?>
      <link href="/favicon.ico" type="image/x-icon" rel="icon">
      <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
	  
  
    <base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER . DIR_WS_HTTPS_CATALOG : HTTP_SERVER . DIR_WS_CATALOG ); ?>">
    <?php if (isset($canonicalLink) && $canonicalLink != '') { ?>
      <link href="<?php echo $canonicalLink; ?>" rel="canonical">
    <?php } ?>
    <?php
    // BOF hreflang for multilingual sites
    if (!isset($lng) || (isset($lng) && !is_object($lng))) {
      $lng = new language;
    }

    if (count($lng->catalog_languages) > 1) {
      foreach ($lng->catalog_languages as $key => $value) {
        echo '<link href="' . ($this_is_home_page ? zen_href_link(FILENAME_DEFAULT, 'language=' . $key, $request_type, false) : $canonicalLink . (strpos($canonicalLink, '?') ? '&amp;' : '?') . 'language=' . $key) . '" hreflang="' . $key . '" rel="alternate">' . "\n";
      }
    }
    // EOF hreflang for multilingual sites
    // Important to load Bootstrap CSS First...
    ?>
    <link rel="stylesheet" href="<?php echo $preloads['bscss']['link']; ?>" integrity="<?php echo $preloads['bscss']['integrity']; ?>" crossorigin="anonymous">

    <?php
    /**
     * load all template-specific stylesheets, named like "style*.css", alphabetically
     */
    $directory_array = $template->get_template_part($template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css'), '/^style/', '.css');
    foreach ($directory_array as $key => $value) {
      echo '<link href="' . $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') . '/' . $value . '" rel="stylesheet">' . "\n";
    }
    /**
     * load stylesheets on a per-page/per-language/per-product/per-manufacturer/per-category basis. Concept by Juxi Zoza.
     */
    $manufacturers_id = (isset($_GET['manufacturers_id'])) ? $_GET['manufacturers_id'] : '';
    $tmp_products_id = (isset($_GET['products_id'])) ? (int)$_GET['products_id'] : '';
    $tmp_pagename = ($this_is_home_page) ? 'index_home' : $current_page_base;
    if ($current_page_base == 'page' && isset($ezpage_id)) {
      $tmp_pagename = $current_page_base . (int)$ezpage_id;
    }
    $sheets_array = array('/' . $_SESSION['language'] . '_stylesheet',
      '/' . $tmp_pagename,
      '/' . $_SESSION['language'] . '_' . $tmp_pagename,
      '/c_' . $cPath,
      '/' . $_SESSION['language'] . '_c_' . $cPath,
      '/m_' . $manufacturers_id,
      '/' . $_SESSION['language'] . '_m_' . (int)$manufacturers_id,
      '/p_' . $tmp_products_id,
      '/' . $_SESSION['language'] . '_p_' . $tmp_products_id
    );
    foreach ($sheets_array as $key => $value) {
      //echo "<!--looking for: $value-->\n";
      $perpagefile = $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') . $value . '.css';
      if (file_exists($perpagefile)) {
        echo '<link href="' . $perpagefile . '" rel="stylesheet">' . "\n";
      }
    }

    /**
     *  custom category handling for a parent and all its children ... works for any c_XX_XX_children.css  where XX_XX is any parent category
     */
    $tmp_cats = explode('_', $cPath);
    $value = '';
    foreach ($tmp_cats as $val) {
      $value .= $val;
      $perpagefile = $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') . '/c_' . $value . '_children.css';
      if (file_exists($perpagefile)) {
        echo '<link href="' . $perpagefile . '" rel="stylesheet">' . "\n";
      }
      $perpagefile = $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') . '/' . $_SESSION['language'] . '_c_' . $value . '_children.css';
      if (file_exists($perpagefile)) {
        echo '<link href="' . $perpagefile . '" rel="stylesheet">' . "\n";
      }
      $value .= '_';
    }

    /**
     * load printer-friendly stylesheets -- named like "print*.css", alphabetically
     */
    $directory_array = $template->get_template_part($template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css'), '/^print/', '.css');
    sort($directory_array);
    foreach ($directory_array as $key => $value) {
      echo '<link href="' . $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page_base, 'css') . '/' . $value . '" media="print" rel="stylesheet">' . "\n";
    }

    require($template->get_template_dir('stylesheet_zca_colors.php', DIR_WS_TEMPLATE, $current_page_base, 'css') . '/stylesheet_zca_colors.php');

    // User defined styles come last 
    $user_styles = DIR_WS_TEMPLATE . 'css/site_specific_styles.php'; 
    if (file_exists($user_styles)) {
        require $user_styles; 
    }

    /** CDN for jQuery core * */
?>
    <script src="<?php echo $preloads['jquery']['link']; ?>" integrity="<?php echo $preloads['jquery']['integrity']; ?>" crossorigin="anonymous"></script>
    <script src="<?php echo $preloads['bsjs']['link']; ?>" integrity="<?php echo $preloads['bsjs']['integrity']; ?>" crossorigin="anonymous"></script>
<?php
    /**
     * load all site-wide jscript_*.js files from includes/templates/YOURTEMPLATE/jscript, alphabetically
     */
    $directory_array = $template->get_template_part($template->get_template_dir('.js', DIR_WS_TEMPLATE, $current_page_base, 'jscript'), '/^jscript_/', '.js');
    foreach ($directory_array as $key => $value) {
      echo '<script src="' . $template->get_template_dir('.js', DIR_WS_TEMPLATE, $current_page_base, 'jscript') . '/' . $value . '"></script>' . "\n";
    }

    /**
     * load all page-specific jscript_*.js files from includes/modules/pages/PAGENAME, alphabetically
     */
    $directory_array = $template->get_template_part($page_directory, '/^jscript_/', '.js');
    foreach ($directory_array as $key => $value) {
      echo '<script src="' . $page_directory . '/' . $value . '"></script>' . "\n";
    }

    /**
     * load all site-wide jscript_*.php files from includes/templates/YOURTEMPLATE/jscript, alphabetically
     */
    $directory_array = $template->get_template_part($template->get_template_dir('.php', DIR_WS_TEMPLATE, $current_page_base, 'jscript'), '/^jscript_/', '.php');
    foreach ($directory_array as $key => $value) {
      /**
       * include content from all site-wide jscript_*.php files from includes/templates/YOURTEMPLATE/jscript, alphabetically.
       * These .PHP files can be manipulated by PHP when they're called, and are copied in-full to the browser page
       */
      require($template->get_template_dir('.php', DIR_WS_TEMPLATE, $current_page_base, 'jscript') . '/' . $value);
      echo "\n";
    }
    /**
     * include content from all page-specific jscript_*.php files from includes/modules/pages/PAGENAME, alphabetically.
     */
    $directory_array = $template->get_template_part($page_directory, '/^jscript_/');
    foreach ($directory_array as $key => $value) {
      /**
       * include content from all page-specific jscript_*.php files from includes/modules/pages/PAGENAME, alphabetically.
       * These .PHP files can be manipulated by PHP when they're called, and are copied in-full to the browser page
       */
      require($page_directory . '/' . $value);
      echo "\n";
    }

// DEBUG: echo '<!-- I SEE cat: ' . $current_category_id . ' || vs cpath: ' . $cPath . ' || page: ' . $current_page . ' || template: ' . $current_template . ' || main = ' . ($this_is_home_page ? 'YES' : 'NO') . ' -->';
    ?>

  <?php
  $zco_notifier->notify('NOTIFY_HTML_HEAD_END', $current_page_base);
  ?>
  </head>
<?php // NOTE: Blank line following is intended:   ?>
<!--<link rel="stylesheet" href="/includes/templates/yourstore/external/rs-plugin/css/settings.css" crossorigin="anonymous">
<link rel="stylesheet" href="/includes/templates/yourstore/external/slick/slick.css" crossorigin="anonymous">//-->
<link rel="stylesheet" href="/canecorso_zencart/includes/templates/yourstore/external/swiper/swiper-bundle.min.css" crossorigin="anonymous">
<script src="/canecorso_zencart/includes/templates/yourstore/external/swiper/swiper-bundle.min.js"></script>
<!--
<script src="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.css" rel="stylesheet">//-->
<!--<script src="/includes/templates/yourstore/external/slick/slick.min.js"></script>//-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="/canecorso_zencart/includes/templates/yourstore/external/colorbox/jquery.colorbox-min.js"></script>
<!--<script src="/canecorso_zencart/includes/templates/yourstore/external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/canecorso_zencart/includes/templates/yourstore/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>//-->
<script>
function bannerCarousel(carousel) {
	carousel.slick({
		infinite: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
				}
			}, 
			{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});
}
function productCarousel(carousel,numberXl,numberLg,numberMd,numberSm,numberXs,numberXxs) {
	var windowW = window.innerWidth || $j(window).width();
	var slidesToShowXl = (numberXl > 0) ? numberXl : 6;
	var slidesToShowLg = (numberLg > 0) ? numberLg : 4;
	var slidesToShowMd = (numberMd > 0) ? numberMd : numberLg;
	var slidesToShowSm = (numberSm > 0) ? numberSm : numberMd;
	var slidesToShowXs = (numberXs > 0) ? numberXs : 2;
	var slidesToShowXxs = (numberXxs > 0) ? numberXxs : 1;
	var carousel = carousel;
	var speed = 500;
	if (carousel.parent().find('.carousel-products__button').length > 0) {

			carousel.slick({
					prevArrow: carousel.parent().find('.carousel-products__button .btn-prev'),
					nextArrow: carousel.parent().find('.carousel-products__button .btn-next'),
					dots: true,
					slidesToShow: slidesToShowXl,
					slidesToScroll: slidesToShowXl,
					responsive: [{
						breakpoint: 1770,
						settings: {
							slidesToShow: slidesToShowLg,
							slidesToScroll: slidesToShowLg
						}
					},{
						breakpoint: 1200,
						settings: {
							slidesToShow: slidesToShowMd,
							slidesToScroll: slidesToShowMd
						}
					}, {
						breakpoint: 992,
						settings: {
							slidesToShow: slidesToShowSm,
							slidesToScroll: slidesToShowSm
						}
					}, {
						breakpoint: 768,
						settings: {
							slidesToShow: slidesToShowXs,
							slidesToScroll: slidesToShowXs
						}
					}, {
						breakpoint: 480,
						settings: {
							slidesToShow: slidesToShowXxs,
							slidesToScroll: slidesToShowXxs
						}
					}]
				});
		}
		else {
			carousel.slick({
				slidesToShow: slidesToShowXl,
				slidesToScroll: 1,
				speed: speed,
					responsive: [{
						breakpoint: 1770,
						settings: {
							slidesToShow: slidesToShowLg,
							slidesToScroll: slidesToShowLg
						}
					},{
						breakpoint: 1200,
						settings: {
							slidesToShow: slidesToShowMd,
							slidesToScroll: slidesToShowMd
						}
					}, {
						breakpoint: 992,
						settings: {
							slidesToShow: slidesToShowSm,
							slidesToScroll: slidesToShowSm
						}
					}, {
						breakpoint: 768,
						settings: {
							slidesToShow: slidesToShowXs,
							slidesToScroll: slidesToShowXs
						}
					}, {
						breakpoint: 480,
						settings: {
							slidesToShow: slidesToShowXxs,
							slidesToScroll: slidesToShowXxs
						}
					}]
			});
		}
	

	fixCarouselHover(carousel);
};
function fixCarouselHover(carousel) {
	carousel.find('.slick-slide').bind( "mouseenter mouseleave",
			function( event ){
				jQuery(this).closest('.slick-slider').toggleClass('hover');
			}
	);			
};

// Revolution Slider
/*
jQuery(function(){
  jQuery('.tp-banner').show().revolution({
	dottedOverlay:"none",
	delay:12000,
	hideTimerBar:"on",
	navigationType:"none",
	//hideSliderAtLimit: 767,
	startwidth:2048,
    startheight:855,
	sliderLayout: 'auto',
	fullScreenOffsetContainer: "#header"
  });

//  bannerCarousel(jQuery('.banner-carousel'));
//  bannerCarousel(jQuery('.bannerCarousel'));
//  productCarousel(jQuery('#carouselCategoryTwo'),3,3,3,3,2,1);
//  productCarousel(jQuery('#postsCarousel'),3,3,2,2,2,1);
});*/
</script>