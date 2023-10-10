<?php
/**
 * tpl_page_3_default.php
 * 
 * BOOTSTRAP v3.5.0
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_page_3_default.php 3464 2006-04-19 00:07:26Z ajeh $
 */
?>
<div id="page3Default" class="centerColumn">
    <h1 id="page3Default-pageHeading" class="pageHeading"><?php echo HEADING_TITLE; ?></h1>

<?php
if (DEFINE_PAGE_3_STATUS === '1' || DEFINE_PAGE_3_STATUS === '2') {
?>
    <div id="page3Default-defineContent" class="defineContent">
<?php
/**
 * load the html_define for the page_3 default
 */
    require $define_page;
?>
    </div>
<?php
}
?>
    <div id="page3Default-btn-toolbar" class="btn-toolbar my-3" role="toolbar">
        <?php echo zca_back_link(); ?>
    </div>
</div>
