<?php
/**
 * BOOTSTRAP v3.5.0
 *
 * Displays the FAQ pages for the Gift-Certificate/Voucher system.<br />
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mc12345678 2019 Nov 14 Modified in v1.5.7 $
 */
?>
<div id="gvFaqDefault" class="centerColumn">
<?php
// only show when there is a GV balance
if (!empty($customer_has_gv_balance)) {
    require $template->get_template_dir('tpl_modules_send_or_spend.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_send_or_spend.php';
}

// -----
// zc158+ now determines the sub-heading title/text and supplies a variable
// containing the value; previous versions provided the information via
// a language define.
//
$subHeadingTitle = (isset($subHeadingTitle)) ? $subHeadingTitle : SUB_HEADING_TITLE;
$subHeadingText = (isset($subHeadingText)) ? $subHeadingText : SUB_HEADING_TEXT;
?>
    <div id="giftCertificateFaq-card" class="card mb-3">
        <h4 id="giftCertificateFaq-card-header" class="card-header"><?php echo HEADING_TITLE; ?></h4>
        <div id="giftCertificateFaq-card-body" class="card-body p-3"> 
            <div id="giftCertificateFaq-content" class="content"><?php echo TEXT_INFORMATION; ?></div>
            <h2 id="giftCertificateFaq-subHeading" class="pageSubHeading"><?php echo $subHeadingTitle; ?></h2>
            <div id="giftCertificateFaq-content-two" class="content"><?php echo $subHeadingText; ?></div>
            <div id="giftCertificateFaq-btn-toolbar" class="btn-toolbar my-3" role="toolbar">
                <?php echo zca_back_link(); ?>
            </div>
        </div>
    </div>

    <div id="giftCertificateRedemption-card" class="card">
        <h4 id="giftCertificateRedemption-card-header" class="card-header"><?php echo TEXT_GV_REDEEM_INFO; ?></h4>
        <div id="giftCertificateRedemption-card-body" class="card-body">
            <form action="<?php echo zen_href_link(FILENAME_GV_REDEEM, '', 'NONSSL', false); ?>" method="get">
                <?php echo zen_draw_hidden_field('main_page',FILENAME_GV_REDEEM) . zen_draw_hidden_field('goback','true') . zen_hide_session_id(); ?>

                <label class="inputLabel" for="lookup-gv-redeem"><?php echo TEXT_GV_REDEEM_ID; ?></label>
                <?php echo zen_draw_input_field('gv_no', isset($_GET['gv_no']) ? $_GET['gv_no'] : '0', 'size="18" id="lookup-gv-redeem"');?>

                <div id="giftCertificateRedemption-btn-toolbar" class="btn-toolbar justify-content-end my-3" role="toolbar">
                    <?php echo zen_image_submit(BUTTON_IMAGE_REDEEM, BUTTON_REDEEM_ALT); ?>
                </div>
            </form>
        </div>
    </div>
</div>
