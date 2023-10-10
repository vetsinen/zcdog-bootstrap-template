<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_return_policy_default.php 3464 2006-04-19 00:07:26Z ajeh $
 */
?>
<div class="centerColumn" id="returnPolicy">

<div class="title-box">
	<h2 id="returnPolicyDefaultHeading" class="text-center text-uppercase"><?php echo HEADING_TITLE; ?></h2>
</div>
<div id="returnPolicyDefaultMainContent">
<?php
/**
 * require the html_define for the return policy page
 */
  require($define_page);
?>
</div>
    <div id="returnPolicyDefault-btn-toolbar" class="btn-toolbar my-3" role="toolbar">
        <?php echo zca_back_link(); ?>
    </div>

</div>