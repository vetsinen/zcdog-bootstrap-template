<?php 
/**
 * Pzen AjxCart for Zen Cart.
 *
 * @copyright Copyright 2017 Perfectus Inc.
 * Version : Pzen AjxCart 1.1
 */
?>
<?php if (PZEN_AJXCART_STATUS == 'true'){ ?>
	<div id="mpzen-ajxcart-container" class="mpzen-ajxcart-container">
		<div class="mpzen-inner-content mpzen-ajxcart-block">
			<div class="close-mpzen-ajxcart close-block mobile-nav-heading"><i class="fa fa-bars"></i><?php echo TEXT_MOBILE_CART_HEADING; ?></div>
			<div id="pzenajx-minicart" class="dropdown hover-dropdown pzenajx-minicart">
				<?php require(DIR_WS_MODULES. 'sideboxes/'.$template_dir. '/pzen_ajx_shopping_cart.php'); ?>
			</div>
			<div class="clearBoth"></div>
		</div>
	</div>
<?php } ?>