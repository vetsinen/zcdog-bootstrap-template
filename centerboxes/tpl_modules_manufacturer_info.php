<?php
/**
 * Side Box Template
 * 
 * BOOTSTRAP v3.4.0
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_manufacturer_info.php 3429 2006-04-13 06:11:47Z ajeh $
 */
$mi_id = $manufacturer_info_sidebox->fields['manufacturers_id'];
$mi_name = $manufacturer_info_sidebox->fields['manufacturers_name'];
?>
<div id="manufacturerInfo-centerBoxContents" class="card mb-3 text-center">
    <h4 id="manufacturerInfo-centerBoxHeading" class="centerBoxHeading card-header"><?php echo BOX_HEADING_MANUFACTURER_INFO; ?></h4>
    <div id="manufacturerInfo-card-body" class="card-body p-3 text-center">
        <div class="text-center mb-3"><?php echo zen_image(DIR_WS_IMAGES . $manufacturer_info_sidebox->fields['manufacturers_image'], $mi_name); ?></div>
        <ul class="list-group">
<?php
if (!empty($manufacturer_info_sidebox->fields['manufacturers_url'])) {
?>
            <li class="list-group-item">
                <a href="<?php echo zen_href_link(FILENAME_REDIRECT, 'action=manufacturer&manufacturers_id=' . $mi_id); ?>" target="_blank">
                    <?php echo sprintf(BOX_MANUFACTURER_INFO_HOMEPAGE, $mi_name); ?>
                </a>
            </li>
<?php
}
?>
            <li class="list-group-item">
                <a href="<?php echo zen_href_link(FILENAME_DEFAULT, 'manufacturers_id=' . $mi_id); ?>">
                    <?php echo BOX_MANUFACTURER_INFO_OTHER_PRODUCTS; ?>
                </a>
            </li>
        </ul>
    </div>
</div>
