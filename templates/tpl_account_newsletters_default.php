<?php
/**
 * Page Template
 *
 * BOOTSTRAP v3.5.0
 *
 * Loaded automatically by index.php?main_page=account_newsletters.<br />
 * Subscribe/Unsubscribe from General Newsletter
 *
 * @package templateSystem
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zcwilt Sat Sep 15 18:30:02 2018 +0100 Modified in v1.5.6 $
 */
?>
<div id="accountNewslettersDefault" class="centerColumn">
<?php echo zen_draw_form('account_newsletter', zen_href_link(FILENAME_ACCOUNT_NEWSLETTERS, '', 'SSL')) . zen_draw_hidden_field('action', 'process'); ?>

    <h1 id="accountNewslettersDefault-pageHeading" class="pageHeading"><?php echo HEADING_TITLE; ?></h1>

<?php if ($messageStack->size('newsletter') > 0) echo $messageStack->output('newsletter'); ?>

<!--bof general newsletter card-->
    <div id="generalNewsletter-card" class="card mb-3">
        <h4 id="generalNewsletter-card-header" class="card-header"><?php echo MY_NEWSLETTERS_GENERAL_NEWSLETTER; ?></h4>
        <div id="generalNewsletter-card-body" class="card-body p-3">
            <div class="custom-control custom-checkbox">
                <?php echo zen_draw_checkbox_field('newsletter_general', '1', ($newsletter->fields['customers_newsletter'] === '1'), 'id="newsletter"'); ?>
                <label class="custom-control-label" for="newsletter"><?php echo MY_NEWSLETTERS_GENERAL_NEWSLETTER_DESCRIPTION; ?></label>
            </div>

            <div id="generalNewsletter-btn-toolbar" class="btn-toolbar justify-content-end my-3" role="toolbar">
                <?php echo zen_image_submit(BUTTON_IMAGE_UPDATE, BUTTON_UPDATE_ALT); ?>
            </div>
        </div>
    </div>
<!--eof general newsletter card-->

    <div id="accountNewslettersDefault-btn-toolbar" class="btn-toolbar my-3" role="toolbar">
        <?php echo zca_button_link(zen_href_link(FILENAME_ACCOUNT, '', 'SSL'), BUTTON_BACK_ALT, 'button_back'); ?>
    </div>

<?php echo '</form>'; ?>
</div>
