<?php
/**
 * Common Template - tpl_header.php
 * 
 * BOOTSTRAP v3.5.0
 *
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 19 Modified in v1.5.7 $
 */
?>
<!--bof-header logo and navigation display-->
<?php
// -----
// Quick return if the header's been disabled.
//
if (!empty($flag_disable_header)) {
    return;
}
?>
<div id="headerWrapper" class="mt-5">
<!--bof-navigation display-->
    <div id="navMainWrapper">
        <div id="navMain">
            <nav class="navbar fixed-top mx-3 navbar-expand-lg rounded-bottom" aria-label="<?php echo TEXT_HEADER_ARIA_LABEL_NAVBAR; ?>">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Mobile menu" title="Mobile menu" name="Menu">
                    <img src="/images/mobile-icons/menu.svg" alt="Mobile menu" title=" Mobile menu" width="24" height="48"><i class="fas fa-bars"></i> <span>Menu</span>
                </button>
                    <?php echo zen_image($template->get_template_dir(HEADER_LOGO_IMAGE, DIR_WS_TEMPLATE, $current_page_base, 'images') . '/badges_big_.png', '', 'auto', 49, 'class="img_bags--mobile"'); ?>
                    <?php echo zen_image($template->get_template_dir(HEADER_LOGO_IMAGE, DIR_WS_TEMPLATE, $current_page_base, 'images') . '/badges_.png', '', 'auto', 49, 'class="img_mini_bags--mobile"'); ?>
		<ul class="navbar-nav dopnav" style="flex-direction: row;">
<?php
if (zen_is_logged_in() && !zen_in_guest_checkout()) {
?>
                        <li class="nav-item btn-right">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><img src="/images/mobile-icons/person.svg" alt="<?php echo HEADER_TITLE_LOGOFF; ?>" title="<?php echo HEADER_TITLE_LOGOFF; ?>" height="48" width="48"></a>
                        </li>
<?php }else{ 
    if (STORE_STATUS === '0') {
?>                      <li class="nav-item btn-right">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><img src="/images/mobile-icons/person.svg" alt="<?=HEADER_TITLE_MY_ACCOUNT?>" title="<?=HEADER_TITLE_MY_ACCOUNT?>" height="48" width="48"></a>
                        </li>

<?php } 
} ?>                    <li class="nav-item btn-right">
                            <a class="nav-link" href="javascript: void(0);" onclick="jQuery('#search-wrapper').modal()"><img src="/images/mobile-icons/search.svg" alt="search" title="search" height="48" width="48"></a>
			</li>
		</ul>

<!--		<img class="badges-big" src="badges_big.png">//-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto1">
<?php
if (!$this_is_home_page) {
?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>">
                                <img src="images/icons-svg/icon-home-min.svg" style="margin-top: -4px;" alt="<?php echo HEADER_TITLE_CATALOG; ?>" height="16" width="17"> <?php echo HEADER_TITLE_CATALOG; ?>
                            </a>
                        </li>
<?php
}

if (zen_is_logged_in() && !zen_in_guest_checkout()) {
?>
                        <li class="nav-item nmobile">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGOFF; ?></a>
                        </li>
                        <li class="nav-item nmobile">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo HEADER_TITLE_MY_ACCOUNT; ?></a>
                        </li>
<?php
} else {
    if (STORE_STATUS === '0') {
?>
                        <li class="nav-item nmobile">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>">
                                <img src="images/icons-svg/icon-log-in-min.svg" style="margin-top: -3px;" alt="<?php echo HEADER_TITLE_LOGIN; ?> to site" height="16" width="16"> <?php echo HEADER_TITLE_LOGIN; ?>
                            </a>
                        </li>
<?php
    }
}

if ($_SESSION['cart']->count_contents() > 0) {
?>
                        <li class="nav-item nmobile">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_SHOPPING_CART, '', 'NONSSL'); ?>"><?php echo HEADER_TITLE_CART_CONTENTS; ?></a>
                        </li>
                        <li class="nav-item nmobile">
                            <a class="nav-link" href="<?php echo zen_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'); ?>"><?php echo HEADER_TITLE_CHECKOUT; ?></a>
                        </li>
<?php
}
 
require $template->get_template_dir('tpl_offcanvas_menu.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_offcanvas_menu.php';
?>
                    </ul>
                    <?php echo zen_image($template->get_template_dir(HEADER_LOGO_IMAGE, DIR_WS_TEMPLATE, $current_page_base, 'images') . '/badges_big_.png', '', 'auto', 49, 'class="img_bags mr-auto"'); ?>
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="javascript: void(0);" id="search-icon" class="nav-link" title="Search"><!--<i class="fas fa-2x fa-search"></i>//--><img src="/images/mobile-icons/ic_round-search-min.svg" alt="search" title="search" height="32" width="32"></a></li>
</ul>
<?php
//require DIR_WS_MODULES . zen_get_module_sidebox_directory('tpl_ajax_search_header.php');
//require DIR_WS_MODULES . zen_get_module_sidebox_directory('search_header.php');
?>
                </div>
            </nav>
        </div>
    </div>
<!--eof-navigation display-->
<div class="mobile--contacts"><p class="contact_timing--mobile"><img src="/images/icons-svg/icon-phone-min.svg" alt="contact phone" height="16" width="16">&nbsp;</span><?= STORE_CONTACT.' ('.STORE_TIMINGS.')'?></p></div>

<!--bof-branding display-->
    <div id="logoWrapper">
        <div id="logo" class="row align-items-center p-3"> 
<?php
$sales_text_class = (HEADER_SALES_TEXT !== '') ? 'col-sm-6 col-md-7 col-8' : 'col-sm-12';
?>
            <div class="<?php echo $sales_text_class; ?>" style="padding-left: 0px;">
                <a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>" aria-label="<?php echo TEXT_HEADER_ARIA_LABEL_LOGO; ?>">   <?php echo zen_image($template->get_template_dir(HEADER_LOGO_IMAGE, DIR_WS_TEMPLATE, $current_page_base, 'images') . '/' . HEADER_LOGO_IMAGE, HEADER_ALT_TEXT, HEADER_LOGO_WIDTH, HEADER_LOGO_HEIGHT,'style="width: auto; height: 72px !important;"'); ?></a><p class="contact_timing"><img src="/images/icons-svg/icon-phone-min.svg" alt="contact phone" height="16" width="16">&nbsp;</span><?= STORE_CONTACT.'<br>('.STORE_TIMINGS.')'?></p>
            </div>
	    <div class="col-sm-3 col-md-2  d-none d-sm-block">
	        <input type="text" id="search-input1" class="form-control" placeholder="Search here..." onfocus="jQuery('#search-wrapper').modal();">
	    </div>
            <div class="col-sm-3 col-md-3 col-4" style="padding-right: 0px;">
		<div class="cart link-inline">
			<div id="ajax-cart-content" class="ajax-cart-content-header dropdown text-right">
				<?php $is_second_topcartlink = FALSE; require($template->get_template_dir('define_header_cart.php',DIR_WS_TEMPLATE, $current_page_base,'define_templates'). '/define_header_cart.php'); ?>
			</div>
		</div>
	    </div>
<?php
if ((SHOW_BANNERS_GROUP_SET2 !== '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET2)) || HEADER_SALES_TEXT !== '') {
?>
            <div id="taglineWrapper" class="col-sm-12 text-center">
<?php
    if (HEADER_SALES_TEXT !== '') {
?>
                <div id="tagline" class="text-center"><?php echo HEADER_SALES_TEXT;?></div>
<?php
    }

    if (SHOW_BANNERS_GROUP_SET2 !== '' && $banner !== false) {
        // -----
        // Set variables used by the banner-carousel.
        //
        $find_banners = zen_build_banners_group(SHOW_BANNERS_GROUP_SET2);
        $banner_group = 2;
?>
                <div class="zca-banner bannerTwo rounded">
<?php 
        if (ZCA_ACTIVATE_BANNER_TWO_CAROUSEL === 'true') {
            require $template->get_template_dir('tpl_zca_banner_carousel.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_zca_banner_carousel.php';
        } else {
            echo zen_display_banner('static', $banner);
        }
?>
                </div>
<?php
    }
?>
            </div>
<?php
}
// no HEADER_SALES_TEXT or SHOW_BANNERS_GROUP_SET2
?>
        </div>
    </div>
<!--eof-branding display-->
<?php
// Display all header alerts via messageStack:
if ($messageStack->size('header') > 0) {
    echo $messageStack->output('header');
}
if (isset($_GET['error_message']) && zen_not_null($_GET['error_message'])) {
    echo zen_output_string_protected(urldecode($_GET['error_message']));
}
if (isset($_GET['info_message']) && zen_not_null($_GET['info_message'])) {
    echo zen_output_string_protected($_GET['info_message']);
}
?>
<!--eof-header logo and navigation display-->

<!--bof-optional categories tabs navigation display-->
<?php //require $template->get_template_dir('tpl_modules_categories_tabs.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_categories_tabs.php'; ?>
<!--eof-optional categories tabs navigation display-->
<!--    <br>//-->
<div id="ezpagesBarHeader" class="ezpagesBar rounded">
<ul class="nav nav-pills">
<!--bof-header ezpage links-->
<?php
if (EZPAGES_STATUS_HEADER === '1' || (EZPAGES_STATUS_HEADER === '2' && zen_is_whitelisted_admin_ip())) {
    require $template->get_template_dir('tpl_ezpages_bar_header.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_ezpages_bar_header.php';
}
?>
<li id="categories" class="dropdown">
<a href="#" class="dropdown-toggle nav-link"><span class="act-underline">Shop</span></a>
<!--eof-header ezpage links-->
<?php require $template->get_template_dir('tpl_modules_categories_tabs.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_categories_tabs.php'; ?>
</li>
</ul>
</div>

</div>
