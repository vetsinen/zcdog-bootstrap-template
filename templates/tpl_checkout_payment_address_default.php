<?php
/**
 * Page Template
 * 
 * BOOTSTRAP v3.5.0
 *
 * Loaded automatically by index.php?main_page=checkout_payment_address.
 * Allows customer to change the billing address.
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Feb 15 Modified in v1.5.7 $
 */
?>
<div id="checkoutPaymentAddressDefault" class="centerColumn">
    <h1 id="checkoutPaymentAddressDefault-pageHeading" class="pageHeading"><?php echo HEADING_TITLE; ?></h1>
    <?php if ($messageStack->size('checkout_address') > 0) echo $messageStack->output('checkout_address'); ?>
<?php
if ($process == false || $error == true) {
?>
<!--bof billing address card-->
    <div id="billingAddress-card" class="card mb-3">
        <h4 id="billingAddress-card-header" class="card-header"><?php echo TITLE_PAYMENT_ADDRESS; ?></h4>
        <div id="billingAddress-card-body" class="card-body p-3">
            <div class="row">
                <div id="billingAddress-billToAddress" class="billToAddress col-sm-5">
                    <address><?php echo zen_address_label($_SESSION['customer_id'], $_SESSION['billto'], true, ' ', '<br>'); ?></address>
                </div>
                <div class="col-sm-7">
                    <div id="billingAddress-content" class="content"><?php echo TEXT_SELECTED_PAYMENT_DESTINATION; ?></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
<!--eof billing address card-->
<?php
    if ($addresses_count < MAX_ADDRESS_BOOK_ENTRIES) {
?>
        <div class="col-lg-6">
            <div id="checkoutNewAddress-card" class="card mb-3">
                <?php echo zen_draw_form('checkout_address', zen_href_link(FILENAME_CHECKOUT_PAYMENT_ADDRESS, '', 'SSL'), 'post', 'class="group"'); ?>
                <h4 id="checkoutNewAddress-card-header" class="card-header"><?php echo TITLE_PLEASE_SELECT; ?></h4>
                <div id="checkoutNewAddress-card-body" class="card-body p-3">
<?php 
        require $template->get_template_dir('tpl_modules_common_address_format.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_common_address_format.php'; 
?>
                    <div class="btn-toolbar justify-content-between mt-3" role="toolbar">
                        <?php echo TITLE_CONTINUE_CHECKOUT_PROCEDURE . '<br>' . TEXT_CONTINUE_CHECKOUT_PROCEDURE; ?>
                        <?php echo zen_draw_hidden_field('action', 'submit') . zen_image_submit(BUTTON_IMAGE_CONTINUE, BUTTON_CONTINUE_ALT); ?>
                    </div>
                </div>
                <?php echo '</form>'; ?>
            </div>
        </div>
<?php
    }
?>
<!--bof choose from your address book entries card-->
        <div class="col-lg-6">
            <div id="addressBookEntries-card" class="card mb-3">
                <?php echo zen_draw_form('checkout_address_book', zen_href_link(FILENAME_CHECKOUT_PAYMENT_ADDRESS, '', 'SSL'), 'post', 'class="group"'); ?>
                <h4 id="addressBookEntries-card-header" class="card-header"><?php echo TABLE_HEADING_ADDRESS_BOOK_ENTRIES; ?></h4>
                <div id="addressBookEntries-card-body" class="card-body p-3">
<?php
    require $template->get_template_dir('tpl_modules_checkout_address_book.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_checkout_address_book.php';
?>
                    <div class="btn-toolbar justify-content-between" role="toolbar">
                        <?php echo TITLE_CONTINUE_CHECKOUT_PROCEDURE . '<br>' . TEXT_CONTINUE_CHECKOUT_PROCEDURE; ?>
                        <?php echo zen_draw_hidden_field('action', 'submit') . zen_image_submit(BUTTON_IMAGE_CONTINUE, BUTTON_CONTINUE_ALT); ?>
                    </div>
                </div>
<!--eof choose from your address book entries card-->
                <?php echo '</form>'; ?>
            </div>
        </div>
    </div>
<?php
}
if ($process == true) {
?>
    <div id="checkoutPaymentAddressDefault-btn-toolbar" class="btn-toolbar justify-content-end mt-3" role="toolbar">
        <?php echo zca_button_link(zen_href_link(FILENAME_CHECKOUT_PAYMENT_ADDRESS, '', 'SSL'), BUTTON_BACK_ALT, 'button_back'); ?>
    </div>
<?php
}
?>
</div>