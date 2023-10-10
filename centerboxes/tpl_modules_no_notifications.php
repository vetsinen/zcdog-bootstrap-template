<?php
/**
 * Side Box Template
 * 
 * BOOTSTRAP v3.4.2
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_no_notifications.php 2982 2006-02-07 07:56:41Z birdbrain $
 */
?>
<div id="ProductNotifications-centerBoxContents" class="card mb-3 text-center">
    <h3 id="ProductNotifications-centerBoxHeading" class="centerBoxHeading card-header"><?php echo BOX_HEADING_NOTIFICATIONS; ?></h3>
    <div id="ProductNotifications-card-body" class="card-body p-3 text-center">
        <a href="<?php echo zen_href_link($_GET['main_page'], zen_get_all_get_params(array('action')) . 'action=notify', $request_type); ?>" title="<?php echo OTHER_BOX_NOTIFY_YES_ALT; ?>">
            <?php echo zen_image(DIR_WS_TEMPLATE_IMAGES . OTHER_IMAGE_BOX_NOTIFY_YES, OTHER_BOX_NOTIFY_YES_ALT); ?>
            <br>
            <?php echo sprintf(BOX_NOTIFICATIONS_NOTIFY, zen_get_products_name($_GET['products_id'])); ?>
        </a>
    </div>
</div>
