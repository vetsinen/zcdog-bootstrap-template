<?php
/**
 * Page Template
 *
 * BOOTSTRAP v3.5.0
 *
 * Loaded automatically by index.php?main_page=product_info.
 * Displays details of a typical product
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Marco Ponchia 2020 May 20 Modified in v1.5.7 $
 */
 //require(DIR_WS_MODULES . '/debug_blocks/product_info_prices.php');
?>
<div id="productInfo" class="centerColumn">

<!--bof Form start-->
<?php echo zen_draw_form('cart_quantity', zen_href_link(zen_get_info_page($_GET['products_id']), zen_get_all_get_params(array('action')) . 'action=add_product', $request_type), 'post', 'enctype="multipart/form-data"') . "\n"; ?>
<!--eof Form start-->
<?php
if ($messageStack->size('product_info') > 0) {
    echo $messageStack->output('product_info');
}
?>
<!--bof Category Icon -->
<?php if ($module_show_categories != 0) {?>
<div id="productInfo-productCategoryIcon" class="productCategoryIcon">
<?php
/**
 * display the category icons
 */
require($template->get_template_dir('/tpl_modules_category_icon_display.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_category_icon_display.php'); ?>
</div>
<?php } ?>
<!--eof Category Icon -->

<!--bof Prev/Next top position -->
<?php if (PRODUCT_INFO_PREVIOUS_NEXT === '1' || PRODUCT_INFO_PREVIOUS_NEXT === '3') { ?>
<div id="productInfo-productPrevNextTop" class="productPrevNextTop">
<?php
/**
 * display the product previous/next helper
 */
require $template->get_template_dir('/tpl_products_next_previous.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_products_next_previous.php'; ?>
</div>
<?php } ?>
<!--eof Prev/Next top position-->

<!--bof Product Name-->
<h1 id="productInfo-productName" class="productName"><?php echo $products_name; ?></h1>
<!--eof Product Name-->

<div id="productInfo-displayRow" class="row">
   <div id="productInfo-displayColLeft"  class="col-sm mb-3">

<!--bof Main Product Image -->
<?php
  if (!empty($products_image)) {
  ?>
<div id="productInfo-productMainImage" class="productMainImage pt-3 text-center">
<?php
/**
 * display the main product image
 */
   require $template->get_template_dir('/tpl_modules_main_product_image.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_main_product_image.php'; ?>
</div>
<?php
  }
?>
<!--eof Main Product Image-->

<!--bof Additional Product Images -->
<div id="productInfo-productAdditionalImages" class="productAdditionalImages text-center">
<?php
/**
 * display the products additional images in a model carousel
 */
 
if (PRODUCT_INFO_SHOW_BOOTSTRAP_MODAL_POPUPS === 'Yes' && PRODUCT_INFO_SHOW_BOOTSTRAP_MODAL_SLIDE === '1') {
  require $template->get_template_dir('tpl_bootstrap_images.php', DIR_WS_TEMPLATE, $current_page_base, 'modalboxes') . '/tpl_bootstrap_images.php';

  if ($num_images > 0) {
  $buttonText = $num_images . TEXT_MULTIPLE_IMAGES; ?>
<div class="p-1"></div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bootstrap-slide-modal-lg"><?php echo $buttonText; ?></button>
<div class="p-3"></div>
<?php
  }
} else {
/**
 * display the products additional images in individual modal
 */
  echo '<div class="p-3"></div>'; 
  require $template->get_template_dir('/tpl_modules_additional_images.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_modules_additional_images.php';
} 
?></div>
<!--eof Additional Product Images -->
</div>
  <div id="productInfo-displayColRight"  class="col-sm mb-3">

<!--bof Product details list  -->
<?php
$display_product_model = ($flag_show_product_info_model === '1' && $products_model !== '');
$display_product_weight = ($flag_show_product_info_weight === '1' && $products_weight != 0);
$display_product_quantity = ($flag_show_product_info_quantity === '1');
$display_product_manufacturer = ($flag_show_product_info_manufacturer === '1' && !empty($manufacturers_name));
if ($display_product_model === true || $display_product_weight === true || $display_product_quantity === true || $display_product_manufacturer === true) { ?>

<ul id="productInfo-productDetailsList" class="productDetailsList list-group mb-3">
  <?php echo (($display_product_model === true) ? '<li class="list-group-item">' . TEXT_PRODUCT_MODEL . $products_model . '</li>' : '') . "\n"; ?>
  <?php echo (($flag_show_product_info_weight == 1 and $products_weight !=0) ? '<li class="list-group-item">' . TEXT_PRODUCT_WEIGHT .  $products_weight . TEXT_PRODUCT_WEIGHT_UNIT . '</li>'  : '') . "\n"; ?>
  <?php echo (($flag_show_product_info_quantity == 1) ? '<li class="list-group-item">' . $products_quantity . TEXT_PRODUCT_QUANTITY . '</li>'  : '') . "\n"; ?>
  <?php echo (($flag_show_product_info_manufacturer == 1 and !empty($manufacturers_name)) ? '<li class="list-group-item">' . TEXT_PRODUCT_MANUFACTURER . $manufacturers_name . '</li>' : '') . "\n"; ?>
</ul>
<?php
  }
?>
<!--eof Product details list -->

<?php
if ($flag_show_ask_a_question) {
?>
<!-- bof Ask a Question -->
<span id="productQuestions">
    <?php echo zca_button_link(zen_href_link(FILENAME_ASK_A_QUESTION, 'pid=' . $_GET['products_id'], 'SSL'), '<img src="/images/ask-question-min.svg" alt="'.BUTTON_ASK_A_QUESTION_ALT.'">&nbsp;&nbsp;'.BUTTON_ASK_A_QUESTION_ALT, 'button_ask_a_question'); ?>
</span>

<!-- eof Ask a Question -->
<?php
}
?>

<!--bof Attributes Module -->
<?php
$one_time = '';
  if ($pr_attr->fields['total'] > 0) {
?>

<!--bof Product Price block above Attributes -->
<?php if (zen_get_products_display_price((int)$_GET['products_id']) > '0') { ?>
<!--bof products price top card-->
<div id="productsPriceTop-card" class="card mb-3">
  <div id="productsPriceTop-card-body" class="card-body p-3">
<h2 id="productsPriceTop-productPriceTopPrice" class="productPriceTopPrice">
  <?php
// base price
  if ($show_onetime_charges_description == 'true') {
    $one_time = '<small>' . TEXT_ONETIME_CHARGE_SYMBOL . TEXT_ONETIME_CHARGE_DESCRIPTION . '</small><br>';
  }
  ?>

<?php
  echo $one_time . ((zen_has_product_attributes_values((int)$_GET['products_id']) and $flag_show_product_info_starting_at == 1) ? TEXT_BASE_PRICE : '') . zen_get_products_display_price((int)$_GET['products_id']);
?>
</h2>
  </div>
</div>
<!--eof products price top card-->
<?php } ?>
<!--eof Product Price block above Attributes -->

<div id="productAttributes">

<?php
/**
 * display the product attributes
 */
  require($template->get_template_dir('/tpl_modules_attributes.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_attributes.php'); ?>
</div>

<?php
  }
?>
<!--eof Attributes Module -->

<!--bof free ship icon  -->
<?php if(zen_get_product_is_always_free_shipping($products_id_current) && $flag_show_product_info_free_shipping) { ?>
<div id="productInfo-productFreeShippingIcon" class="productFreeShippingIcon text-center m-3"><?php echo TEXT_PRODUCT_FREE_SHIPPING_ICON; ?></div>
<?php } ?>
<!--eof free ship icon  -->

<!--bof Quantity Discounts table -->
<?php
  if ($products_discount_type != 0) { ?>
<div id="productInfo-productQuantityDiscounts" class="productQuantityDiscounts">
<?php
/**
 * display the products quantity discount
 */
 require($template->get_template_dir('/tpl_modules_products_quantity_discounts.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_products_quantity_discounts.php'); ?>
</div>
<?php
  }
?>
<!--eof Quantity Discounts table -->

<!--bof Product Price block -->
<?php if (zen_get_products_display_price((int)$_GET['products_id']) > '0') { ?>
<!--bof products price bottom card-->
<div id="productsPriceBottom-card" class="card mb-3">
  <div id="productsPriceBottom-card-body" class="card-body p-3">
<h2 id="productsPriceBottom-productPriceBottomPrice" class="productPriceBottomPrice">
<?php
  echo $one_time . ((zen_has_product_attributes_values((int)$_GET['products_id']) and $flag_show_product_info_starting_at == 1) ? TEXT_BASE_PRICE : '') . zen_get_products_display_price((int)$_GET['products_id']);
?>
</h2>
  </div>
</div>
<!--eof products price bottom card-->
<?php } ?>
<!--eof Product Price block -->

<!--bof Add to Cart Box -->
<?php
if (CUSTOMERS_APPROVAL == 3 && TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM == '') {
  // do nothing
} else {
    $display_qty = ($flag_show_product_info_in_cart_qty == 1 && $_SESSION['cart']->in_cart($_GET['products_id'])) ? '<p>' . PRODUCTS_ORDER_QTY_TEXT_IN_CART . $_SESSION['cart']->get_quantity($_GET['products_id']) . '</p>' : '';
    if ($products_qty_box_status == 0 || $products_quantity_order_max == 1) {
      // hide the quantity box and default to 1
      $the_button = '<input type="hidden" name="cart_quantity" value="1">' . zen_draw_hidden_field('products_id', (int)$_GET['products_id']) . zen_image_submit(BUTTON_IMAGE_IN_CART, BUTTON_IN_CART_ALT);
    } else {
        // show the quantity box
        $the_button = '<div class="input-group mb-3">';
        $the_button .= '<input class="form-control" type="text" name="cart_quantity" value="' . $products_get_buy_now_qty . '" aria-label="' . ARIA_QTY_ADD_TO_CART . '">';
        $the_button .= '<div class="input-group-append">';

        $the_button .= zen_draw_hidden_field('products_id', (int)$_GET['products_id']) . zen_image_submit(BUTTON_IMAGE_IN_CART, BUTTON_IN_CART_ALT);
        $the_button .= '</div>';
        $the_button .= '</div>';
        
        if (zen_get_products_quantity_min_units_display((int)$_GET['products_id']) > '0') {
            $the_button .= '<div id="min-max-units" class="d-flex justify-content-around">';
            $the_button .= zen_get_products_quantity_min_units_display((int)$_GET['products_id']);
            $the_button .= '</div>'; 
        }
    }
    $display_button = zen_get_buy_now_button($_GET['products_id'], $the_button);
?>
<?php if ($display_qty != '' || $display_button != '') { ?>
<!--bof add to cart card-->
<div id="addToCart-card" class="card mb-3">
  <div id="addToCart-card-header" class="card-header"><?php echo PRODUCTS_ORDER_QTY_TEXT; ?></div>
  <div id="cartAdd" class="card-body text-center">
<?php if($products_quantity == -100000000){ ?>
<div class="wrapper cartAdd sold">
 <span class="so_btn_sold_out">sold out</span>						    
 <span class="btn_alternative">People love this alternative</span>			  <a href="<?= zen_href_link(zen_get_info_page($products_alternative), 'products_id='.$products_alternative, 'SSL'); ?>" class="so_btn_check_out btn--ys">Click to check it out</a>
	  </div>	
<?php
}else{
      echo $display_qty;
      echo $display_button;
	}	
?>
  </div>
</div>
<!--eof add to cart card-->
  <?php } // display qty and button ?>
<?php } // CUSTOMERS_APPROVAL == 3 ?>
<!--eof Add to Cart Box-->
<?php 
                              if (!empty($products_short_desc)) {
                          ?>
                                <div class="divider divider--xs product-info__divider"></div>
                                <div id="shortDescProduct" class="product-info__sku">
                                  <?php echo $products_short_desc; ?>
                                </div>
                          <?php } ?>

  </div>
</div>
<div class="row">
  <div class="col-sm mb-3">
<ul class="nav nav-tabs nav-tabs--ys1">
	<li class="active"><a data-toggle="tab" href="#description" class="tab" aria-expanded="false"><?php echo TEXT_PRODUCT_DESCRIPTION; ?></a></li>
	<li class=""><a data-toggle="tab" href="#shipping" class="tab" aria-expanded="true"><?php echo TEXT_PRODUCT_SHIPPING; ?></a></li>
</ul>
<!--bof Product description -->
<?php if ($products_description != '') { 
    $reviews_query = "SELECT * FROM " . TABLE_REVIEWS . " r, ". TABLE_REVIEWS_DESCRIPTION . " rd
                       WHERE r.products_id = " . (int)$_GET['products_id'] . "
                       AND r.reviews_id = rd.reviews_id
                       AND rd.languages_id = " . (int)$_SESSION['languages_id'] . " AND r.status = 1 ORDER by r.reviews_id desc";
;

    $reviews = $db->Execute($reviews_query);
?>
			<div id="description" class="tab-pane active">
<?php
  $products_model_name = substr($products_model, 0, strpos($products_model, '#'));
  
/*  if ($products_model_name != '') {
      $sql = "select sizes_marking, sizes_breeds, sizes_length, sizes_circumference, 
                sizes_eye_line, sizes_neck_circumference from " . TABLE_MODELS_SIZES . " 
              where models_id = " .
              " (select models_id from " . TABLE_PRODUCTS_MODELS . "
                 where models_name = '" . $products_model_name . "')";
                 
      $models_sizes_table = $db->Execute($sql);
  }*/
  if ($products_model_name != '') {
      $sql = "SELECT sizes_marking, sizes_breeds, sizes_length, sizes_circumference, sizes_eye_line, sizes_neck_circumference, sizes_width, sizes_height 
        FROM " . TABLE_MODELS_SIZES . " 
        WHERE models_id = (SELECT models_id FROM " . TABLE_PRODUCTS_MODELS . "
                           WHERE models_name = '" . $products_model_name . "') AND language_id = " . (int) $_SESSION['languages_id'];

                 
      $models_sizes_table = $db->Execute($sql);
  }
  if (isset($models_sizes_table) && $models_sizes_table->RecordCount() > 0) {
    include($template->get_template_dir('/tpl_model_sizes_table.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_model_sizes_table.php');
  }
//echo 'dcb '.$reviews->RecordCount().' dfggh ';
								    if ($reviews->RecordCount()) {
								        foreach ($reviews as $index => $review) {
								            if ($index == 0) { ?>
<div id="productInfo-productDescription" class="productDescription mb-3"><?php echo str_replace("<span style=\"font-size:larger\">","<span style=\"font-size: 10pt;\">",  stripslashes(str_replace("#cc33ff","#bf1e1e",str_replace("#cc00ff","#bf1e1e",str_replace("COLOR: red","COLOR: #bf1e1e",str_replace("#ff0000","#bf1e1e",str_replace("#FF0000","#bf1e1e", str_replace("width:760px","width: 100%",str_replace("width: 760px;","width: 100%;",$products_description))))))) )); ?></div>
<?php								            } ?>
											<div class="card card--padding">
                                        	    <div class="review-in-description-text">
                                        	        <i class="fas fa-quote-left"></i>
                                                    <?= zen_break_string(zen_output_string_protected(stripslashes($reviews->fields['reviews_text'])), 35, '-<br />'); ?>
                                                    <i class="fas fa-quote-right"></i>
                                                </div>                                    	        
                                                <div class="review-in-description-author">
                                                    <?php echo sprintf(TEXT_REVIEW_BY, zen_output_string_protected($reviews->fields['customers_name']) . ', ' . zen_output_string_protected($reviews->fields['date_added'])); ?><br>
                                                    <?php echo zen_image(DIR_WS_TEMPLATE_IMAGES . 'stars_' . $reviews->fields['reviews_rating'] . '.gif', sprintf(TEXT_OF_5_STARS, $reviews->fields['reviews_rating'])) . '   <span>'. sprintf(BOX_REVIEWS_TEXT_OF_5_STARS, $reviews->fields['reviews_rating']).'</span>'; ?>
                                                </div>
                                        	</div>
<?php				} 
}else{ ?>
<div id="productInfo-productDescription" class="productDescription mb-3"><?php echo str_replace("<span style=\"font-size:larger\">","<span style=\"font-size: 10pt;\">", stripslashes(str_replace("#cc33ff","#bf1e1e",str_replace("#cc00ff","#bf1e1e",str_replace("COLOR: red","COLOR: #bf1e1e",str_replace("#ff0000","#bf1e1e",str_replace("#FF0000","#bf1e1e", str_replace("width:760px","width: 100%",str_replace("width: 760px;","width: 100%;",$products_description)))))))) ); ?></div>
<?php
}
?></div>
<?php } ?>
			<div id="shipping" class="tab-pane">
                            <div class="product-tab">
		                        <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_PRODUCTS_SHIPPING, 'false'); ?>
                            </div>
                        </div>
<script>
	jQuery('.nav-tabs--ys1 li').click(function(){
		jQuery('.nav-tabs--ys1 li').removeClass('active');
		jQuery(this).addClass('active');
	}); 
</script>
<!--eof Product description -->
<!--bof Reviews button and count--><?php
if ($flag_show_product_info_reviews === '1') {
    // if more than 0 reviews, then show reviews button; otherwise, show the "write review" button
    if ($reviews->fields['count'] > 0 ) {?>
    <div id="productInfo-productReviewLink" class="productReviewLink mb-3">
        <?php echo zca_button_link(zen_href_link(FILENAME_PRODUCT_REVIEWS, zen_get_all_get_params()), BUTTON_REVIEWS_ALT, 'button_reviews'); ?>
    </div>

    <p id="productInfo-productReviewCount" class="productReviewCount">
        <?php echo ($flag_show_product_info_reviews_count === '1' ? TEXT_CURRENT_REVIEWS . ' ' . $reviews->fields['count'] : ''); ?>
    </p>
<?php
    } else {?>
    <div id="productInfo-productReviewLink" class="productReviewLink mb-3">
        <?php echo zca_button_link(zen_href_link(FILENAME_PRODUCT_REVIEWS_WRITE, zen_get_all_get_params()), BUTTON_WRITE_REVIEW_ALT, 'button_write_review'); ?>
    </div>
<?php
    }
}
?>
<!--eof Reviews button and count -->
  </div>
</div>


<div id="productInfo-moduledDisplayRow" class="row">
<?php if (0/*PRODUCT_INFO_SHOW_NOTIFICATIONS_BOX == '1'*/) { ?>
<!--bof Products Notification Module-->
    <div id="productInfo-moduleDisplayColLeft" class="col-sm">
        <?php require DIR_WS_MODULES . zen_get_module_directory('centerboxes/product_notifications.php'); ?>
    </div>
<!--eof Products Notification Module-->
<?php } ?>

<?php if (0/*PRODUCT_INFO_SHOW_MANUFACTURER_BOX == '1'*/) { ?>
<!--bof Products Manufacturer Info Module-->
    <div id="productInfo-moduleDisplayColRight" class="col-sm">
        <?php require DIR_WS_MODULES . zen_get_module_directory('centerboxes/manufacturer_info.php'); ?>
    </div>
<!--eof Products Manufacturer Info Module-->
<?php } ?>
</div>

<!--bof Product date added/available-->

<?php
  if ($products_date_available > date('Y-m-d H:i:s')) {
    if ($flag_show_product_info_date_available == 1) {
?>
<p id="productInfo-productDateAvailable" class="productDateAvailable text-center">
      <?php echo sprintf(TEXT_DATE_AVAILABLE, zen_date_long($products_date_available)); ?>
</p>
<?php
    }
  } else {
    if ($flag_show_product_info_date_added == 1) {
?>
<p id="productInfo-productDateAdded" class="productDateAdded text-center">
    <?php echo sprintf(TEXT_DATE_ADDED, zen_date_long($products_date_added)); ?>
</p>
<?php
    } // $flag_show_product_info_date_added
  }
?>
<!--eof Product date added/available -->

<!--bof Product URL -->
<?php
  if (!empty($products_url)) {
    if ($flag_show_product_info_url == 1) {
?>
<p id="productInfo-productUrl" class="productUrl text-center">
        <?php echo sprintf(TEXT_MORE_INFORMATION, zen_href_link(FILENAME_REDIRECT, 'action=product&products_id=' . zen_output_string_protected($_GET['products_id']), 'NONSSL', true, false)); ?>
</p>
<?php
    } // $flag_show_product_info_url
  }
?>
<!--eof Product URL -->

<!--bof also purchased products module-->

<?php require($template->get_template_dir('tpl_modules_also_purchased_products.php', DIR_WS_TEMPLATE, $current_page_base,'centerboxes'). '/' . 'tpl_modules_also_purchased_products.php');?>

<!--eof also purchased products module-->

<!--bof Prev/Next bottom position -->
<?php if (PRODUCT_INFO_PREVIOUS_NEXT == 2 or PRODUCT_INFO_PREVIOUS_NEXT == 3) { ?>
<div id="productInfo-productPrevNextBottom" class="productPrevNextBottom">
<?php
/**
 * display the product previous/next helper
 */
 require($template->get_template_dir('/tpl_products_next_previous.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_products_next_previous.php'); ?>
</div>
<?php } ?>
<!--eof Prev/Next bottom position -->

<!--bof Form close-->
    <?php echo '</form>'; ?>
<!--bof Form close-->
</div>
<script>
$(function() {
    $('#sidebox-velaro a').clone().appendTo('#f-products-velaro'); 
 });

if ($('.f-tab-header').length > 0) {
    $('.f-tab-header').click(function(e) {
        $(e.target).toggleClass('f-tab-header-active');
        $('#' + e.target.dataset.fdt).toggleClass('f-tab-body-active');
    });
}

if ($('.f-question-header').length > 0) {
    $('.f-question-header').click(function(e) {
        $(e.target).toggleClass('f-question-header-active');
        $('#' + e.target.dataset.fdt).toggleClass('f-question-body-active');
    }); 
}

if ($('.f-short-tab-link').length > 0) {
    $('.f-short-tab-link').click(function(e) {
        $('.f-short-tab-link').removeClass('f-short-tab-link-active');
        $('.f-short-tab-content').removeClass('f-short-tab-content-active');
        $(e.target).addClass('f-short-tab-link-active');
        $('#' + e.target.dataset.fdt).addClass('f-short-tab-content-active');
    });  
}

if ($('.products-bar').length > 0) {
    $('.products-bar').appendTo($('.stuck-nav'));
}

if ($('.products-bar_btn').length > 0) {
    $('.products-bar_btn').click(function() {
        $('.button_in_cart, .buybtn_input').click();    
    });
}

if ($('.products-bar-fixed').length > 0) {
    if ($('#productAttributes').length > 0) {
        $('.products-bar-fixed-text').text('Select options');
    } else {
        $('.products-bar-fixed-text').text('Add to cart');
    }
    $('.products-bar-fixed-btn').click(function() {
        if ($('#productAttributes').length > 0) {
            var top = $('#productAttributes').offset().top - $('.stuck-nav').height();
            $("body,html").animate({scrollTop: top}, 1500);
		    return false;
        } else {
            $('.button_in_cart, .buybtn_input').click(); 
        }
    });
}

function changeProductsBar(element) {
    switch (element.type) {
        case 'select':
        case 'select-one':
            changeIdTagField(element);
            $('#' + element.id + '-top span').text(element.options[element.selectedIndex].text);
            break;
        case 'text':
        case 'number':
            if ($(element).hasClass('quantity-input')) {
                $('.products-bar__qty span').text(element.value);  
            } else {
                $('#' + element.id + '-top span').text(element.value);    
            }
            break;
        case 'checkbox':
        case 'radio':
            $('#' + element.id + '-top span').text(element.value);
            break;
    }
}

function changeIdTagField(element) {
    var tagValue = element.options[element.selectedIndex].text;
    
    if (tagValue == 'blank id tag') {
        $('.products-bar').find('p').each(function() {
            if ($(this).text().indexOf('Engraving line') + 1) {
                $(this).addClass('hide');
            }    
        });
    } else if (tagValue == 'please engrave my id tag') {
        $('.products-bar').find('p').each(function() {
            if ($(this).text().indexOf('Engraving line') + 1) {
                $(this).removeClass('hide');
            }    
        }); 
    }
}
</script>
<style>
#header.header-layout-03 .logo {
    margin: 10px 10px 0
}

#header .logo {
    max-width: 75%
}

#bannerOne h1 {
    font-size: 1.2em;
}

.banner .figure img {
    padding: 0 5px
}

.zoom-in .figure:hover img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05)
}

.bannerCarousel {
    margin-top: 0!important
}

.box-baners {
    margin-top: 40px
}

.banner-carousel {
    min-height: 0
}

#sidebar-banner h2#sidebar-bannerHeading {
    display: block
}

#checkoutShipAddressDefault .buttonRow.back {
    line-height: 0
}

.collapse-block {
    padding: 14px 21px 14px 20px
}

footer .social-links {
    margin: 0
}

.create-account-page .submit-info .button_submit {
    float: none;
    margin-top: 5px
}

.recaptcha-details .card--padding {
    margin-bottom: 10px
}

@media (max-width: 374px) {
    .g-recaptcha>div {
        -webkit-transform-origin:0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: scale(.8);
        -ms-transform: scale(.8);
        transform: scale(.8)
    }
}

.header-layout-03 .stuck-nav .fix-user-menu {
    display: none;
    border-bottom: 1px solid #fff
}

.header-layout-03 .stuck-nav.fixedbar .fix-user-menu {
    display: block
}

.fnt-small #header .cart .badge--cart {
    line-height: 1.8em!important
}

#header.header-layout-03 .fix-user-menu {
    background-color: #fff
}

@media (min-width: 1025px) {
    .fixedbar .cart .dropdown>a .icon {
        color:#fff!important
    }

    #header.header-layout-03 .stuck-nav.fixedbar .badge--cart {
        left: 25px;
        top: -35px
    }

    #header.header-layout-03 .stuck-nav.fixedbar #search-dropdown-fix {
        top: 0;
        margin-top: 1px;
        height: 48px
    }

    #header.header-layout-03 .stuck-nav.fixedbar #search-dropdown-fix .input-outer input {
        height: 48px
    }

    .header-layout-03 .fixedbar #search-dropdown-fix .input-outer button {
        font-size: 2.5em;
        padding: 8px 10px 7px
    }

    #header.header-layout-03 .fixedbar .fix-user-menu .search {
        display: block!important;
        margin: 0;
        padding: 0 0 10px 5px
    }

    .header-layout-03 .fixedbar .fix-user-menu .search span.icon-search {
        padding: 0;
        line-height: 26px
    }

    #header.header-layout-03 .fixedbar .fix-user-menu .account-row-list ul {
        margin: 10px 0 0 0;
        padding: 0
    }

    #header.header-layout-03 .fixedbar .navbar-nav>li>a {
        padding-top: 4px
    }

    #header.header-layout-03 #search-dropdown-fix .icon-search:hover {
        color: #000
    }
}

@media (max-width: 1024px) {
    .fnt-small #header .fixedbar .cart {
        top:48px
    }

    .fnt-small #header .fixedbar .cart .badge--cart {
        top: -26px
    }

    #header.header-layout-03 .fixedbar .fix-user-menu .account {
        display: block!important;
        position: relative;
        top: 0;
        text-align: center;
        padding: 0;
        height: auto
    }

    #header.header-layout-03 .fix-user-menu .account {
        display: none!important
    }

    #header.header-layout-03 .fixedbar .fix-user-menu .account .dropdown-toggle .icon-person {
        color: #fff;
        font-size: 1.5em
    }

    #header.header-layout-03 .fixedbar .fix-user-menu .account .icon-person:before {
        vertical-align: top
    }

    #header.header-layout-03 .fixedbar .fix-user-menu .account .dropdown.text-right {
        padding: 0;
        margin: 0
    }

    #header.header-layout-03 .account .dropdown-toggle .icon-person {
        color: #fff
    }

    .fixedbar .cart {
        margin-top: -10px!important
    }

    .fnt-small #header .fixedbar .cart #topcartlink-menu .icon-shopping_basket:after {
        content: "Checkout \2192";
        font-size: .6em;
        position: absolute;
        right: 40px;
        bottom: 7px;
        width: 120px
    }
}

#search-dropdown {
    margin-top: -60px
}

.badges-mobile {
    display: none
}

.settings .badges {
    margin-top: -12px
}

.fix-user-menu .badges img {
    display: block;
    margin: 0 auto
}

#header.header-layout-03 .fix-user-menu .account-row-list ul li {
    margin-right: 22px
}

@media (max-width: 1024px) {
    .badges-mobile {
        display:block;
        text-align: center
    }

    .fnt-small #header .cart {
        top: 57%
    }

    .badges {
        position: absolute;
        top: 0;
        left: 0
    }
}

.breadcrumbs {
    padding: 0
}

.breadcrumb-inner .breadcrumb.breadcrumb--ys {
    padding: 5px 0 5px
}

.bannerAsid .slick-next {
    right: -20px
}

.bannerAsid .slick-prev {
    left: -20px
}

.link-anchor {
    position: absolute;
    margin-top: -320px
}

.link-anchor-fixed {
    position: absolute;
    margin-top: -220px
}

.product-info__description.product__inside__info {
    padding: 0 30px 10px
}

.product-info .product-info__price {
    font-size: 3em
}

.quantity-input {
    font-size: 1.5em
}

.product-info__description {
    padding: 0
}

.select-wrapper:after {
    display: none
}

.attribsRadioButton {
    margin-left: 5px
}

.product-info .qty-input {
    font-size: 3em;
    padding: 12px 0
}

.product-info .qty-input,.product__inside__info .prod-qty-bx .qty_txt>input {
    font-size: 2.6em;
    padding: 12px 0
}

@media (max-width: 1199px) {
    .product-info .qty-input {
        font-size:1.3em;
        margin-right: 5px;
        padding: 0;
        width: 50px;
        height: 48px!important
    }

    .cartAdd .btn--ys.btn--xxl {
        padding: 5px 7px;
        font-size: 1.3em
    }

    .product-info .qty-label {
        line-height: 50px
    }
}

.description-product-zagolovok {
    color: #4d4d4d;
    text-align: center;
    margin-bottom: 5px
}

.click {
    color: #d47f55;
    text-align: center;
    margin-bottom: 0;
    font-family: Arial,Helvetica,sans-serif;
    font-size: .9em;
    font-weight: 700;
    margin-top: 0
}

.redsize {
    color: #ff1f00;
    font-weight: 700
}

.table-key-head {
    font-family: 'Roboto Condensed',sans-serif;
    font-size: 1.2em;
    font-weight: 400;
    color: #00aeff;
    text-shadow: 1px 1px #fff
}

.our-new-picture,.our-new-pictures {
    font-family: 'Roboto Condensed',sans-serif;
    color: #878787;
    font-size: 18px;
    font-weight: 100;
    text-align: center;
    margin-bottom: 5px;
    margin-top: 2px
}

.product-table {
    margin: 0 auto;
    border: none
}

.product-table td {
    vertical-align: top;
    width: 50%
}

.subcategories {
    border: none;
    margin: 0
}

.f-short-tabs-nav {
    list-style: none;
    height: 30px;
    padding: 0 0 35px 0;
    margin: 0
}

.f-short-tabs-nav li {
    display: inline-block
}

.f-short-tabs-nav span {
    display: block;
    margin-right: 20px;
    cursor: pointer
}

.f-short-tabs-nav span:hover {
    color: #000
}

.f-short-tab-link-active {
    padding-bottom: 2px
}

.f-short-tab-content {
    display: none
}

.f-short-tab-content-active {
    display: block
}

.f-short-tab-content-active {
    display: block
}

.f-short-tab-content ul {
    list-style: disc inside;
    padding-left: 0px;
}

#indexProductList>div.title-box>h2 {
    margin-bottom: 1em
}

#category-slider {
    margin-top: 10px
}

#category-slider img {
    width: 100%
}

.slick-next,.slick-next:focus,.slick-prev,.slick-prev:focus {
    background-color: transparent
}

@media (max-width: 1300px) {
    .box-baners {
        margin-top:0
    }
}

@media (min-width: 1024px) {
    #leftMenu .navbar-nav,#mainMenu .navbar-nav {
        float:none;
        margin: 0 auto;
        display: table;
        table-layout: fixed
    }

    .megamenu__submenu {
        overflow-y: auto;
        max-height: 439px
    }

    .megamenu__submenu .megamenu__submenu {
        height: auto;
        overflow: visible
    }

    #leftMenu .mn1 li>ul li>ul,#mainMenu .mn1 li>ul li>ul {
        position: static;
        margin: 0;
        box-shadow: 0 0 10px rgba(0,0,0,.5)
    }

    #leftMenu .mn1 li>ul li>ul a,#mainMenu .mn1 li>ul li>ul a {
        background-color: #f7f7f7
    }

    #leftMenu .mn1 li>ul li>ul a:hover,#mainMenu .mn1 li>ul li>ul a:hover {
        background-color: #fff
    }

    .megamenu__subtitle span:first-child {
        height: 3em
    }
}

@media (max-width: 994px) {
    #sidebar-banner {
        margin-top:5px
    }
}

@media (max-width: 767px) {
    .subscribe-box h4 {
        text-align:left
    }
}

@media (max-width: 479px) {
    .title-under {
        margin-bottom:0
    }

    #category-slider {
        margin-top: -10px
    }
}

@media (max-width: 440px) {
    .link-anchor {
        margin-top:-220px
    }

    .link-anchor-fixed {
        margin-top: -160px
    }
}

@media (max-width: 420px) {
    .link-button {
        padding:0 2px!important;
        font-size: 12px!important
    }
}

@media (max-width: 325px) {
    #header .logo {
        max-width:65%
    }
}

.filter-block {
    background-color: #fff;
    margin-bottom: 20px;
    z-index: 9998;
    width: 100%
}

.filter-bar a:active,.filter-bar a:focus,.filter-bar a:hover {
    text-decoration: none;
    color: #000
}

.filter-bar label:active,.filter-bar label:focus,.filter-bar label:hover {
    color: red;
    cursor: pointer
}

.filter-header {
    background-color: #222;
    padding: 5px
}

.filter-header .filter-title {
    color: #fff;
    font-size: 18px;
    text-transform: uppercase;
    margin: 0;
    padding: 0 12px
}

.filter-tab-headers {
    margin: 5px 0 0 162px;
    list-style: none;
    padding: 0
}

.filter-tab-headers li {
    position: relative;
    display: inline-block;
    height: 25px;
    padding: 3px 30px 0 10px;
    background-color: #f1f1f1;
    cursor: pointer;
    min-width: 16.355%;
    margin-right: .37%;
    margin-bottom: 2px;
    line-height: 1.4
}

.filter-tab-headers li.active,.filter-tab-headers li:hover {
    background-color: #d8d8d8;
    color: red
}

.filter-tab-headers a {
    color: #000;
    font-size: 13px;
    line-height: 14px;
    letter-spacing: .02em;
    text-transform: uppercase
}

.filter-tab-content {
    overflow: auto;
    max-height: 300px
}

.filter-btn-submit {
    float: left;
    padding-left: 10px;
    padding-right: 10px;
    text-align: center
}

.open-all-filter {
    margin: 0 auto 2px;
    display: inline-block;
    line-height: 1.2em
}

.filter-tab-headers li i {
    position: absolute;
    right: .3em;
    top: -.05em;
    font-size: 1.4em
}

.filter-attribute {
    border-bottom: 1px solid #fff;
    background-color: #d8d8d8;
    padding: 10px 24px 0;
    position: relative;
    display: none
}

.filter-attribute .icon-close {
    color: red;
    cursor: pointer;
    font-size: 1.5em;
    line-height: 1;
    position: absolute;
    right: 10px;
    top: 10px
}

.filter-attribute ul {
    position: relative;
    height: auto;
    font-size: 1em;
    list-style: none;
    margin: 0
}

.filter-attribute h5 {
    width: 100%;
    margin-bottom: 3px;
    margin-right: 20px;
    color: #828282
}

.filter-attribute li {
    position: relative;
    display: block;
    float: left;
    width: 18%;
    padding: 0;
    margin-bottom: 10px;
    line-height: 1.1
}

.filter-tab-breadcrumb {
    padding: 2px 10px
}

.filter-clear {
    background-color: #f1f1f1;
    cursor: pointer;
    display: inline-block;
    padding: 2px 5px;
    margin-right: 5px
}

.filter-clear:hover {
    color: #000
}

.filter-bar-mobile {
    display: none
}

@media (max-width: 1024px) {
    .filter-bar {
        display:none
    }

    .filter-bar-mobile {
        display: block
    }

    .filter-main {
        display: none;
        overflow: auto;
        max-height: 260px
    }

    .filter-acc-header {
        border-bottom: 1px solid #777;
        font-size: 16px;
        padding: 5px 10px
    }

    .filter-acc-header.active {
        background-color: #d8d8d8
    }

    .filter-title {
        position: relative
    }

    .filter-title .icon {
        font-size: 21px;
        position: absolute;
        top: -2px;
        right: 20px
    }

    .filter-btn-submit {
        background-color: #222;
        display: none;
        float: none;
        padding: 5px
    }

    .filter-btn-submit a {
        line-height: 1.2em
    }

    .filter-acc-body {
        display: none;
        padding: 7px 10px
    }

    .filter-acc-body label {
        width: 100%
    }
}

@media (max-width: 480px) {
    #bestSellers .carousel-control,#featuredProducts .carousel-control,#popularProducts .carousel-control,#specialsDefault .carousel-control,#whatsNew .carousel-control {
        display:none
    }
}

.join-us-form #mce-EMAIL {
    width: 100%;
    border: 1px solid #e5e5e5
}

.submit-container {
    text-align: center
}

.join-us-form button {
    position: static;
    margin-top: 5px
}
.products-bar-fixed-btn .btn, .f-short-tabs-nav span {
    color: #162c9c;
    font-weight: 500;
}
.f-short-tab-link-active {
    padding-bottom: 2px;
}

.f-short-tab-link-active {
    border-bottom: 2px solid #162c9c;
}
</style>