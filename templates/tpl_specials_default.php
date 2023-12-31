<?php
/**
 * Page Template
 * 
 * BOOTSTRAP v3.1.4
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sat Jan 9 13:13:41 2016 -0500 Modified in v1.5.5 $
 */
?>
<div id="specialsDefault" class="centerColumn">

<h1 id="specialsDefault-pageHeading" class="pageHeading"><?php echo HEADING_TITLE; ?></h1>

<!-- bof: specials -->
<?php
/**
 * require the list_box_content template to display the products
 */
 
  require($template->get_template_dir('tpl_modules_product_listing.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_product_listing.php');
?>
<!-- eof: specials -->

</div>
