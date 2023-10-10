<?php
/**
 * Module Template
 * 
 * BOOTSTRAP v3.5.0
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All 2019 Jun 03 Modified in v1.5.7 $
 */
require DIR_WS_MODULES . zen_get_module_directory(FILENAME_MAIN_PRODUCT_IMAGE);

if (PRODUCT_INFO_SHOW_BOOTSTRAP_MODAL_POPUPS == 'Yes') {
    require $template->get_template_dir('tpl_image.php', DIR_WS_TEMPLATE, $current_page_base, 'modalboxes'). '/tpl_image.php';
?>
<div id="productMainImage">
    <!--<a data-toggle="modal" data-target=".image-modal-lg" href="#image-modal-lg">//-->
<a target="_blank" href="<?=$products_image_large?>" data-rel="lightbox-g">
        <?php //echo zen_image(/*$products_image_medium*/$products_image_large, $products_name, MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT, 'style="max-width: 100%;"'); 
echo zen_image(/*$products_image_medium*/$products_image_large, $products_name, MEDIUM_IMAGE_WIDTH*5, MEDIUM_IMAGE_HEIGHT*5, 'style="max-width: 100%;" class="fimg"'); 
?>
        <div class="p-1"></div>
        <span class="imgLink"><img src="/images/icons-svg/icon-zoom-min.svg" alt="<?php echo TEXT_CLICK_TO_ENLARGE; ?>"> <?php echo TEXT_CLICK_TO_ENLARGE; ?></span>  
    </a>
</div>
<?php
} else {
?>
<div id="productMainImage" class="centeredContent back">
<script>
document.write('<?php echo '<a href="javascript:popupWindow(\\\'' . zen_href_link(FILENAME_POPUP_IMAGE, 'pID=' . $_GET['products_id']) . '\\\')">' . zen_image(addslashes($products_image_medium), addslashes($products_name), MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT) . '<br><span class="imgLink">' . TEXT_CLICK_TO_ENLARGE . '</span></a>'; ?>');
</script>
<noscript>
<?php
    echo '<a href="' . zen_href_link(FILENAME_POPUP_IMAGE, 'pID=' . $_GET['products_id']) . '" target="_blank">' . zen_image($products_image_medium, $products_name, MEDIUM_IMAGE_WIDTH, MEDIUM_IMAGE_HEIGHT) . '<br><span class="imgLink">' . TEXT_CLICK_TO_ENLARGE . '</span></a>';
?>
</noscript>
</div>
<?php
}
