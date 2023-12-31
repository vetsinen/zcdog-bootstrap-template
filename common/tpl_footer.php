<?php
/**
 * Common Template - tpl_footer.php
 * 
 * BOOTSTRAP v3.0.0
 *
 * this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * make a directory /templates/my_template/privacy<br />
 * copy /templates/templates_defaults/common/tpl_footer.php to /templates/my_template/privacy/tpl_footer.php<br />
 * to override the global settings and turn off the footer un-comment the following line:<br />
 * <br />
 * $flag_disable_footer = true;<br />
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 19 Modified in v1.5.7 $
 */
require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));
?>

<?php
if (!isset($flag_disable_footer) || !$flag_disable_footer) {
    ?>

    <div id="footerWrapper">
        <div class="row">
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_FOOTER_INFORMATION_LINKS, 'false'); ?>
                    </div>
                    <div class="col-12 col-sm-4">
                        <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_FOOTER_ACCOUNT_LINKS, 'false'); ?>
                    </div>
                    <div class="col-12 col-sm-4"><span class="text-left  title-under  mobile-collapse__title"><?= FOOTER_TITLE_CUSTOMER_CARE ?></span>
                        <!--bof-navigation display -->
                        <?php if (EZPAGES_STATUS_FOOTER == '1' or ( EZPAGES_STATUS_FOOTER == '2' && zen_is_whitelisted_admin_ip())) { ?>
                            <?php require($template->get_template_dir('tpl_ezpages_bar_footer.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_ezpages_bar_footer.php'); ?>
                        <?php } ?>
                        <!--eof-navigation display -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-6">
                <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_FOOTER_SOCIAL_LINKS, 'false'); ?>
            </div>
            <div class="col-12 col-lg-3"></div>
        </div>
        <!--bof-ip address display -->
        <?php
        if (SHOW_FOOTER_IP == '1') {
            ?>
            <div id="siteinfoIP" class="text-center"><?php echo TEXT_YOUR_IP_ADDRESS . '  ' . $_SERVER['REMOTE_ADDR']; ?></div>
            <?php
        }
        ?>
        <!--eof-ip address display -->

        <!--bof-banner #5 display -->
        <?php
        if (SHOW_BANNERS_GROUP_SET5 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET5)) {
            if ($banner->RecordCount() > 0) {
                $find_banners = zen_build_banners_group(SHOW_BANNERS_GROUP_SET5);
                $banner_group = 5;
                ?>

                <div class="zca-banner bannerFive rounded">
                    <?php
                    if (ZCA_ACTIVATE_BANNER_FIVE_CAROUSEL == 'true') {
                        require($template->get_template_dir('tpl_zca_banner_carousel.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_zca_banner_carousel.php');
                    } else {
                        echo zen_display_banner('static', $banner);
                    }
                    ?>
                </div>
                <?php
            }
        }
        ?>
        <!--eof-banner #5 display -->

        <!--bof- site copyright display -->
        <div class="row">
            <div class="footer-line"></div>  
            <div class="col-12 col-lg-6">
                <div id="siteinfoLegal" class="legalCopyright"><?php echo FOOTER_TEXT_BODY; ?></div>
            </div>
            <div class="col-12 col-lg-6">
                <?php echo zen_image($template->get_template_dir(HEADER_LOGO_IMAGE, DIR_WS_TEMPLATE, $current_page_base, 'images') . '/payment_1507281153_1608787059.png', '', 'auto', 'auto', 'class="footer-image-payment" style="float: right; margin-top: 20px; padding-right: 20px; margin-bottom: 20px; background-color: #FFF; padding: 8px; border-radius: 3px; margin-right: 20px;"'); ?>
            </div>
            <!--eof- site copyright display -->


        </div>
        <?php
    } // flag_disable_footer
    ?>

    <?php if (false || (isset($showValidatorLink) && $showValidatorLink == true)) { ?>
        <a href="https://validator.w3.org/check?uri=<?php echo urlencode('http' . ($request_type == 'SSL' ? 's' : '') . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . (strstr($_SERVER['REQUEST_URI'], '?') ? '&' : '?') . zen_session_name() . '=' . zen_session_id()); ?>" rel="noopener" target="_blank">VALIDATOR</a>
    <?php } ?>
