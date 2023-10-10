<?php 
/**
 * Pzen AjxCart for Zen Cart.
 *
 * @copyright Copyright 2017 Perfectus Inc.
 * Version : Pzen AjxCart 1.1
 */
?>
<div id="productGeneral" class="pzen-ajxcartattr-wrapper">
	<?php /*
	<div class="ajxcart-popup-top">
		<h2><?php echo PZEN_AJXCART_QCK_SELECT_OPTION; ?></h2>
	</div>*/ ?>
	<!--bof Form start-->
	<?php echo zen_draw_form('cart_quantity', zen_href_link(zen_get_info_page($_GET['products_id']), zen_get_all_get_params(array('action')) . 'action=add_product', $request_type), 'post', 'enctype="multipart/form-data"') . "\n"; ?>
	<!--eof Form start-->
	<?php if ($messageStack->size('product_info') > 0) echo $messageStack->output('product_info'); ?>
	<div class="ajxcart-info">
		<div class="product_image">
			<!--bof Main Product Image -->
			<?php  if (zen_not_null($products_image)) {  ?>
				<?php require(DIR_WS_MODULES . zen_get_module_directory(FILENAME_MAIN_PRODUCT_IMAGE)); ?>
				<div id="productMainImage" class="centeredConten">
				<?php echo zen_image($products_image_medium, $products_name, PZEN_AJXCART_POPUP_IMAGE_WIDTH, PZEN_AJXCART_POPUP_IMAGE_HEIGHT); ?>
				</div>
			<?php  }?>
			<!--eof Main Product Image-->
		</div>
		<div class="pinfo-right">
			<h1 id="productName" class="productGeneral"><?php echo $products_name; ?></h1>
			<!--bof Product Price block -->
			<div id="productPrices" class="productGeneral price-box product-info__price">
				<?php
					// base price
					if ($show_onetime_charges_description == 'true') {
						$one_time = '<span >' . TEXT_ONETIME_CHARGE_SYMBOL . TEXT_ONETIME_CHARGE_DESCRIPTION . '</span><br />';
					} else {
						$one_time = '';
					}
					echo $one_time . ((zen_has_product_attributes_values((int)$_GET['products_id']) and $flag_show_product_info_starting_at == 1) ? '' : '') . zen_get_products_display_price((int)$_GET['products_id']);
					?>
			</div>
			<!--eof Product Price block -->
			<?php if(SHOW_PRODUCT_INFO_REVIEWS_COUNT==1){ ?>
			<div class="product-info__review">
				<?php 
					if ($reviews->fields['count'] > 0 ) { 
						if ($flag_show_product_info_reviews_count == 1) {
							echo pzen_product_reviews($_GET['products_id']);
						} 
					  } ?>
				<a href="<?php echo  zen_href_link(FILENAME_PRODUCT_REVIEWS, zen_get_all_get_params(), 'SSL'); ?>" title="<?php echo BUTTON_REVIEWS_ALT; ?>">
					<?php  echo TEXT_CURRENT_REVIEWS ." ". $reviews->fields['count']; ?>
				</a>
			</div>
			<?php } ?>
			<div class="divider divider--xs product-info__divider hidden-xs"></div>
			<!--bof Product details list  -->
			<?php if ( (($flag_show_product_info_model == 1 and $products_model != '') or ($flag_show_product_info_weight == 1 and $products_weight !=0) or ($flag_show_product_info_manufacturer == 1 and !empty($manufacturers_name))) ) { ?>
			<ul id="productDetailsList">
			  <?php echo (($flag_show_product_info_model == 1 and $products_model !='') ? '<li><span class="lbl">' . TEXT_PRODUCT_MODEL .'</span><strong class="val">' . $products_model . '</strong></li>' : '') . "\n"; ?>
			  <?php echo (($flag_show_product_info_weight == 1 and $products_weight !=0) ? '<li><span class="lbl">' . TEXT_PRODUCT_WEIGHT .'</span><strong class="val">' .  $products_weight . TEXT_PRODUCT_WEIGHT_UNIT . '</strong></li>'  : '') . "\n"; ?>
			  <?php echo (($flag_show_product_info_manufacturer == 1 and !empty($manufacturers_name)) ? '<li><span class="lbl">' . TEXT_PRODUCT_MANUFACTURER .'</span><strong class="va">'. $manufacturers_name . '</strong></li>' : '') . "\n"; ?>
			</ul>
			<?php } ?>
			<!--eof Product details list -->
			
			
			<!--bof free ship icon  -->
			<?php if(zen_get_product_is_always_free_shipping($products_id_current) && $flag_show_product_info_free_shipping) { ?>
			<div id="freeShippingIcon"><?php echo TEXT_PRODUCT_FREE_SHIPPING_ICON; ?></div>
			<?php } ?>
			<!--eof free ship icon  -->
		</div>
	</div>
	<div class="ajxcart-info-attr product-info">
		<!--bof Attributes Module -->
		<?php  if ($pr_attr->fields['total'] > 0) {	?>
		<?php  require($template->get_template_dir('/tpl_modules_attributes.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_attributes.php'); ?>
		<?php  } ?>
		<!--eof Attributes Module -->
		<br class="clearBoth" />
		<!--bof Quantity Discounts table -->
		<?php
		  if ($products_discount_type != 0) { ?>
		<?php
		/**
		 * display the products quantity discount
		 */
		 require($template->get_template_dir('/tpl_modules_products_quantity_discounts.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_products_quantity_discounts.php'); ?>
		<?php
		  }
		?>
		<!--eof Quantity Discounts table -->	
		<!--bof Add to Cart Box -->
		<?php
		if (CUSTOMERS_APPROVAL == 3 and TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM == '') {
		  // do nothing
		} else {?>
		<?php
		$display_qty = (($flag_show_product_info_in_cart_qty == 1 and $_SESSION['cart']->in_cart($_GET['products_id'])) ? '<p>' . PRODUCTS_ORDER_QTY_TEXT_IN_CART . $_SESSION['cart']->get_quantity($_GET['products_id']) . '</p>' : '');
		if ($products_qty_box_status == 0 or $products_quantity_order_max== 1) {
			// hide the quantity box and default to 1
			$the_button = '<input type="hidden" name="cart_quantity" value="1" />' . zen_draw_hidden_field('products_id', (int)$_GET['products_id']) . zen_image_submit(BUTTON_IMAGE_IN_CART, BUTTON_IN_CART_ALT);
			
		} else {
		    // show the quantity box
			$the_button = '<span class="qty-label col-md-1">'.TEXT_QTY.'</span><div class="qty col-md-3">' . '<input type="text" class="quantity-input input--ys qty-input pull-left" name="cart_quantity" value="' . (zen_get_buy_now_qty($_GET['products_id'])) . '" maxlength="6" size="4" /><div class="spplus-minus"><div class="sp-plus fff"><a href="javascript:void(0)" class="ddd">+</a></div><div class="sp-minus fff"><a href="javascript:void(0)" class="ddd">-</a></div></div><div class="ext_cont">' . zen_get_products_quantity_min_units_display((int)$_GET['products_id']).'</div>'. zen_draw_hidden_field('products_id', (int)$_GET['products_id']) . '</div><div class="col-md-6"><div class="btn btn--ys">
										<span class="icon icon-shopping_basket"></span>
									'.zen_image_submit(BUTTON_IMAGE_IN_CART, BUTTON_IN_CART_ALT) . zen_draw_hidden_field('products_id', (int)$_GET['products_id']).
									'</div></div>';
		}
		$display_button = zen_get_buy_now_button($_GET['products_id'], $the_button);
		?>
		<?php if ($display_qty != '' or $display_button != '') { ?>
			<div class="ajxcart-action">
				<div id="cartAdd" class="cart-box">
					<?php echo $display_qty; echo $display_button; ?>
				</div>
			</div>
		  <?php } // display qty and button ?>
		<?php } // CUSTOMERS_APPROVAL == 3 ?>
		<!--eof Add to Cart Box-->
	</div>
	</form>
</div>