<?php
/**
 * Page Template
 * 
 * BOOTSTRAP v3.5.0
 *
 * Loaded automatically by index.php?main_page=checkout_success.
 * Displays confirmation details after order has been successfully processed.
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2019 Oct 25 Modified in v1.5.7 $
 */
?>
<div id="checkoutSuccessDefault" class="centerColumn">

<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
</div>

<h1 id="checkoutSuccessDefault-pageHeading" class="pageHeading"><?php echo HEADING_TITLE; ?></h1>

<?php if (DEFINE_CHECKOUT_SUCCESS_STATUS >= 1 and DEFINE_CHECKOUT_SUCCESS_STATUS <= 2) { ?>
<div id="checkoutSuccessDefault-defineContent" class="defineContent">
<?php
/**
 * require the html_defined text for checkout success
 */
  require($define_page);
?>
</div>
<?php } ?>

<!-- bof payment-method-alerts -->
<?php
if (isset($additional_payment_messages) && $additional_payment_messages != '') {
?>
<div id="checkoutSuccessDefault-content" class="content">
  <?php echo $additional_payment_messages; ?>
</div>
<?php
}
?>
<!-- eof payment-method-alerts -->

<!--eof card deck-->
<div id="logOffMyAccount-card-deck" class="card-deck mb-3">
    
<!--bof log off card-->
    <div id="logOff-card" class="card">
        <div id="logOff-card-body" class="card-body"> 
<?php
  if (isset($_SESSION['customer_guest_id'])) {
    echo TEXT_CHECKOUT_LOGOFF_GUEST;
  } elseif (isset($_SESSION['customer_id'])) {
    echo TEXT_CHECKOUT_LOGOFF_CUSTOMER;
  }
?>

    <div id="logOff-btn-toolbar" class="btn-toolbar justify-content-between mt-3" role="toolbar">
        <?php echo zca_button_link(zen_href_link(FILENAME_ACCOUNT, '', 'SSL'), BUTTON_MY_ORDERS_TEXT, 'button_my_orders', 'id="linkMyAccount"'); ?>
        <?php echo zca_button_link(zen_href_link(FILENAME_LOGOFF, '', 'SSL'), BUTTON_LOG_OFF_ALT, 'button_logoff', 'id="linkLogoff"'); ?>
    </div>

        </div>
    </div>
<!--eof log off card-->

<!--bof my account card--> 
    <div id="myAccount-card" class="card">
        <div id="myAccount-card-body" class="card-body">
<?php echo TEXT_CONTACT_STORE_OWNER;?>

    <div id="cust-btn-toolbar" class="btn-toolbar justify-content-center mt-3" role="toolbar">
        <?php echo zca_button_link(zen_href_link(FILENAME_CONTACT_US, '', 'SSL'), BUTTON_CONTACT_US_TEXT, 'button_contact_us'); ?>
    </div>

        </div>
    </div>
<!--eof my account card-->

</div>
<!--eof card deck-->

<!--bof customer service card--> 
    <div id="customerService-card" class="card mb-3" style="display: none;">
        <div id="customerService-card-body" class="card-body p-3">
            <?php echo TEXT_CONTACT_STORE_OWNER;?>
        </div>
    </div>
<!--eof customer service card-->

<!--bof order number card--> 
    <div id="orderNumber-card" class="card mb-3">
        <div id="orderNumber-card-body" class="card-body p-3">
            <?php echo TEXT_YOUR_ORDER_NUMBER . $zv_orders_id; ?>
        </div>
    </div>
<!--eof order number card--> 

<!-- bof order details -->
<?php
 require $template->get_template_dir('tpl_account_history_info_default.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_account_history_info_default.php';
?>
<!-- eof order details -->

<!--bof -gift certificate- send or spend box-->
<?php
// only show when there is a GV balance
  if ($customer_has_gv_balance ) {
?>

<?php require $template->get_template_dir('tpl_modules_send_or_spend.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_send_or_spend.php'; ?>

<?php
  }
?>
<!--eof -gift certificate- send or spend box-->
<?php
/**
 * The following creates a list of checkboxes for the customer to select if they wish to be included in product-notification
 * announcements related to products they've just purchased.
 **/
    if ($flag_show_products_notification == true) {
?>
<!--bof product notifications card-->
<div id="productNotifications-card" class="card mb-3">
<h4 id="productNotifications-card-header" class="card-header">
    <?php echo TEXT_NOTIFY_PRODUCTS; ?>
    </h4>
<div id="productNotifications-card-body" class="card-body p-3">
<?php echo zen_draw_form('order', zen_href_link(FILENAME_CHECKOUT_SUCCESS, 'action=update', 'SSL')); ?>


<?php foreach ($notificationsArray as $notifications) { ?>
<div class="custom-control custom-checkbox">
<?php echo zen_draw_checkbox_field('notify[]', $notifications['products_id'], true, 'id="notify-' . $notifications['counter'] . '"') ;?>
<label class="custom-control-label checkboxLabel" for="<?php echo 'notify-' . $notifications['counter']; ?>"><?php echo $notifications['products_name']; ?></label>
</div>
<br>
  <?php } ?>
<div id="productNotifications-btn-toolbar" class="btn-toolbar justify-content-end mt-3" role="toolbar">
<?php echo zen_image_submit(BUTTON_IMAGE_UPDATE, BUTTON_UPDATE_ALT); ?>
</div>

<?php echo '</form>'; ?>
</div>
</div>
<!--eof product notifications card-->
<?php
    }
?>
<div id="checkoutSuccessDefault-content-one" class="content text-center">
<h3><?php echo TEXT_THANKS_FOR_SHOPPING; ?></h3>
</div>
</div>
