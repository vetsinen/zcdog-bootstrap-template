<?php 
/**
 * Pzen AjxCart for Zen Cart.
 * WARNING: Do not change this file. Your changes will be lost.
 *
 * @copyright Copyright 2017 Perfectus Inc.
 * Version : Pzen AjxCart 1.7
 */
?>
<?php if(PZEN_AJXCART_STATUS=='true'){
$catalog_path = (($request_type=='SSL')?HTTPS_SERVER.DIR_WS_HTTPS_CATALOG:HTTP_SERVER.DIR_WS_CATALOG);
if(PZEN_AJXCART_JQUERY_STATUS=='true'){
 echo '<script src="'.$template->get_template_dir('pzenajxcart-jquery1.12.4.min.js',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/pzenajxcart-jquery1.12.4.min.js'.'"></script>';
}
?>
<style>
.pzenajx-wrapper .pzenajx-pop-content {max-width: <?php echo (PZEN_AJXCART_POPUP_WIDTH!='auto')? PZEN_AJXCART_POPUP_WIDTH.'px' : PZEN_AJXCART_POPUP_WIDTH ; ?>;height: <?php echo (PZEN_AJXCART_POPUP_HEIGHT!='auto')? PZEN_AJXCART_POPUP_HEIGHT.'px' : PZEN_AJXCART_POPUP_HEIGHT ; ?>;}
.pzenajx-wrapper .image > img{max-width: <?php echo (PZEN_AJXCART_POPUP_IMAGE_WIDTH!='auto')? PZEN_AJXCART_POPUP_IMAGE_WIDTH.'px' : PZEN_AJXCART_POPUP_IMAGE_WIDTH ; ?>;height: <?php echo (PZEN_AJXCART_POPUP_IMAGE_HEIGHT!='auto')? PZEN_AJXCART_POPUP_IMAGE_HEIGHT.'px' : PZEN_AJXCART_POPUP_IMAGE_HEIGHT ; ?>;}
</style>
<script>
var popTimer;
var HeaderTop = 240;
function stuckNav(){
		$(window).scroll(function(){
			checkStickyPosition();
		});
		$(window).resize(function(){
			checkStickyPosition();
		});
		checkStickyPosition();
}
function checkStickyPosition(){
    if ($(window).scrollTop() > HeaderTop) {
	    $('#ajax-cart-content').addClass('fixedbar');
	    $('.dopnav').addClass('fixedbar');
		$('#navMain').addClass('fixedbar');
	} else {
	    $('#ajax-cart-content').removeClass('fixedbar');
	    $('.dopnav').removeClass('fixedbar');
		$('#navMain').removeClass('fixedbar');
	}
}
jQuery(document).ready(function(){
        stuckNav();
	jQuery("body").on("click","#pzencontinue_shopping, .pzenajx-close",function(){
		closePzenAjxPopup();
	});
	jQuery("body").on("click", "#pzengo_cart",function(){
		parent.location.href="<?php echo zen_href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>";
	});
	jQuery('body').on('click','.spplus-minus .sp-plus', function(){
		var oldVal = jQuery('.cart-box input[name="cart_quantity"]').val();
		var newVal = (parseInt(jQuery('.cart-box input[name="cart_quantity"]').val(),10) +1);
		jQuery('.cart-box input[name="cart_quantity"]').val(newVal);
		jQuery('.cart-box input[name="cart_quantity"]').trigger("keyup");
	});

	jQuery('body').on('click','.spplus-minus .sp-minus', function(){
	var oldVal = jQuery('.cart-box input[name="cart_quantity"]').val();
    var newVal = (parseInt(jQuery('.cart-box input[name="cart_quantity"]').val(),10) -1);
    if (oldVal > 1) {
            var newVal = parseFloat(oldVal) - 1;
        } else {
            var newVal = 1;
        }
		jQuery('.cart-box input[name="cart_quantity"]').val(newVal);
		jQuery('.cart-box input[name="cart_quantity"]').trigger("keyup");
	});
});

$(function(){
	var timer = 0;
	var pzenajx_wrapper='<div id="pzenajx-wrapper" class="pzenajx-wrapper modal  modal--bg fade in"><div class="modal-dialog white-modal"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button></div><div class="pzenajx-content"><div class="pzenajxinner-content"></div></div></div></div></div>';
	
	if(!$("#pzenajx-wrapper").length){
		$('body').append(pzenajx_wrapper);
	}
	
	$('#pzenajx-wrapper .close').click(function() {
		removePzenCartRow('');
	});
	
	//BOF Qty validation
    $('body').on('keydown', 'input[name="cart_quantity"], input[name="cart_quantity[]"]', function (e) {
		
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
		
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	$('body').on('blur', 'input[name="cart_quantity"], input[name="cart_quantity[]"]', function (e) {
		var cur_val = parseInt($(this).val());
		var min_val = parseInt($(this).attr('min'));
		var max_val = parseInt($(this).attr('max'));
		if(isNaN(cur_val)){
			$(this).val(min_val); 
		}
    });
	$('body').on('change keyup', 'input[name="cart_quantity"], input[name="cart_quantity[]"]', function (e) {
		var cur_val = parseInt($(this).val());
		var min_val = parseInt($(this).attr('min'));
		var max_val = parseInt($(this).attr('max'));
		if(cur_val < min_val){
			$(this).val(min_val); 
		}
		if(cur_val > max_val){
			$(this).val(max_val);
		}
    });
	//EOF Qty validation
	
	// product Listing submit cart action
	$('body').on('submit', '#productListing form[name="cart_quantity"]', function(e){
		e.preventDefault();
		var data = new FormData(this);
		var attr = getFrmUrlParams($(this).attr('action'));
		if((typeof attr!="undefined") && attr!=''){
			$.each( attr, function( key, value ) {
				if($.inArray( key, [ "products_id", "action"] )){
					data.append(key, value);
				}
			});
		}
		data.append("qty", ($(this).find('input[name="cart_quantity"]').val()));
		data.append('pzen_action','prodinfo-add');
		setPzenAjxAddCart($(this), '', '', '', data);
		
	});
	
	// product info submit cart action
	$('body').on('submit', '#productGeneral form[name="cart_quantity"]', function(e){
		e.preventDefault();
		var data = new FormData(this);
		var attr = getFrmUrlParams($(this).attr('action'));
		if((typeof attr!="undefined") && attr!=''){
			$.each( attr, function( key, value ) {
				if($.inArray( key, [ "products_id", "action"] )){
					data.append(key, value);
				}
			});
		}
		data.append("pzen_action","prodinfo-add");
		data.append("qty", ($(this).find('input[name="cart_quantity"]').val()));
		setPzenAjxAddCart($(this), '', 'prodinfo-add', '', data, 'pinfo');
		
	});
	$('body').on('submit', '#productInfo form[name="cart_quantity"]', function(e){
		e.preventDefault();
		var data = new FormData(this);
		var attr = getFrmUrlParams($(this).attr('action'));
		if((typeof attr!="undefined") && attr!=''){
			$.each( attr, function( key, value ) {
				if($.inArray( key, [ "products_id", "action"] )){
					data.append(key, value);
				}
			});
		}
		data.append("pzen_action","prodinfo-add");
		data.append("qty", ($(this).find('input[name="cart_quantity"]').val()));
		setPzenAjxAddCart($(this), '', 'prodinfo-add', '', data, 'pinfo');
		
	});
	
	// product Listing Multi add cart
	$('form[name="multiple_products_cart_quantity"]').submit(function(event) {
		event.preventDefault();
		var data = new FormData(this);
		data.append("pzen_action","multiprod-add");
		setPzenAjxAddCart($(this).find("#productListing"), '', '', '', data);
		
	});
	
	// Cart Full Update
	$('body').on('submit', '#shoppingCartDefault form[name="cart_quantity"]', function(e){
		e.preventDefault();
		var data = new FormData(this);
		data.append('pzen_action','multicart-update');
		setPzenAjxAddCart($("#shoppingCartDefault"), '', action='multicart-update', '', data, 'cartpage');
	});
	
	//Cart Single Update
	$('.cartQuantityUpdate input').click(function(e) {
		e.preventDefault();
		pid = $(this).siblings('input[name="products_id[]"]').val();
		var data = new FormData($('#shoppingCartDefault form[name="cart_quantity"]')[0]);
		data.append('suid', pid);
		data.append('pzen_action','cart-update');
		setPzenAjxAddCart($(this).parent().parent(), pid, action='cart-update', '', data, 'cartpage');	
	});
	
	// Cart delete action
	$('.cartRemoveItemDisplay a').click(function(event) {
		event.preventDefault();
		var pid=getParameterByName('product_id',$(this).attr('href'));
		if(pid){
			setPzenAjxRemoveCart($(this).parent().parent(), decodeURIComponent(pid), 'cart-remove','', '', 'cartpage');
		}
	});
});
function getFrmUrlParams(url) {
	if(url){
		var regex = /([^=&?]+)=([^&#]*)/g, params = {}, parts, key, value;
		while((parts = regex.exec(url)) != null) {
			key = parts[1], value = parts[2];
			var isArray = /\[\]$/.test(key);
			if(isArray) {
				params[key] = params[key] || [];
				params[key].push(value);
			}
			else {
				params[key] = value;
			}
		}
		return params;
	}
}
function getParameterByName(sParam, url) {
    if (!url) { url = window.location.href; }
    var sPageURL =url;
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++)
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam)
	        {
	            return sParameterName[1];
	        }
	    }
}
function setPzenShowOptions(e, products_id, link){
	setPzenAjxloaderClass(e, 'add');
	try {
		jQuery.ajax({
			type : 'POST',
			url  : link,
			dataType : 'HTML',
			data : {'pzen_action': 'show','products_id': products_id},
			success :function(data){
				setPzenAjxQck(e, data, 'qck');
				setPzenAjxloaderClass(e, 'remove');
			},
			error: function(xhr, textStatus, errorThrown) {
				var err = eval("(" + xhr.responseText + ")");
				setPzenAjxQck(e, "Error: " + xhr.status + ": " + xhr.statusText);
				setPzenAjxloaderClass(e, 'remove');
			}
		});
	} catch (e) {
	}
	return false;
}
function setPzenAjxloaderClass(e, act='add', t=''){
	if(act=='add'){
		$('body').addClass("pzen-ajx-loader");
		if(t=='pinfo' ){
			e.addClass("pzen-ajxldr");
		}else if(t=='cartpage' ){
			e.addClass("pzen-tbl-ajxldr");
		}else if(t=='rcart'){
			$(e).parents(".dropdown-menu").addClass("pzen-ajxldr");
		}else{
			$(e).parents('.product').addClass("pzen-ajxldr");
		}
	}else if(act=='remove'){
		$('body').removeClass("pzen-ajx-loader");
		if(t=='pinfo' ){
			e.removeClass("pzen-ajxldr");
		}else if(t=='cartpage' ){
			e.removeClass("pzen-tbl-ajxldr");
		}else if(t=='rcart'){
			$(e).parents(".dropdown-menu").removeClass("pzen-ajxldr");
		}else{
			$(e).parents('.product').removeClass("pzen-ajxldr");
		}
	}
}
//set AjxAddtoCart
function setPzenAjxAddCart(e, products_id, action='add', qty='1', d, t){
	setPzenAjxloaderClass(e, 'add', t);
	
	if((typeof d!="undefined") && d!=''){
		d = d;
	}else{
		d = new FormData; 
		d.append('pzen_action', action); 
		d.append('products_id', products_id); 
		d.append('qty', qty);
	}
	try {
		jQuery.ajax({
			type : 'POST',
			url  : "<?php echo $catalog_path.FILENAME_PZEN_AJX_CART; ?>",
			dataType : 'json',
			contentType: false, 
			cache: false,
			processData:false,
			data : d,
			success :function(data){
				setPzenAjxData(e, data, action);
				setPzenAjxloaderClass(e, 'remove', t);
			},
			error: function(xhr, textStatus, errorThrown) {
				var err = eval("(" + xhr.responseText + ")");
				setPzenAjxQck(e, "Error: " + xhr.status + ": " + xhr.statusText);
				setPzenAjxloaderClass(e, 'remove', t);
			}
		});
	} catch (e) {
	}
	return false;
}
function setPzenAjxRemoveCart(e, pid, action='remove'){
	setPzenAjxAddCart(e, pid, action, 0, '', 'rcart');
}
function setPzenAjxData(e, data, action){
	popstimer=<?php echo PZEN_AJXCART_POPUP_TIMEOUT; ?>;
	if(data.status == 'error'){
		setPzenAjxHandPop(data, poptimer);
	}else{
		if(data.minicart){
			$(".ajax-cart-content-header").html(data.minicart);
			$("#pzenajxshoppingcart .sideBoxContent").html(data.minicart);
		}
		if(data.cartcontent){
			$("#mpzen-ajxcart-action .cart-count").html(data.cartcontent.cartCount);
			$('#cartSubTotal').html(data.cartcontent.subTotal);
			$('.cartTotalsDisplay').html(data.cartcontent.mainTotals);
			if(data.cartcontent.shippingEstimator){
				$('.shippingEstimatorCont').html(data.cartcontent.shippingEstimator);
				$('select').addClass('select--ys form-control');
				if($('input[type="submit"].cssButton').length>0){
					$('input[type="submit"].cssButton').attr("data-btn","btn btn--ys");
				}
			}
		}
		
		if(action == 'prodinfo-add'){
			var pcrtup = $(data.popcontent).find(".qty-in-cart").text();
			if(typeof pcrtup != "undefined"){
				if(pcrtup!=''){
					if($('.product-info .cartAdd .qty-in-cart').length > 0){
						$('.product-info .cartAdd .qty-in-cart').html(pcrtup);
					}else{
						$('.product-info .cartAdd').prepend('<p class="qty-in-cart">'+pcrtup+'</p>');
					}
				}
			}
		}
		
		if(action=='multicart-update'){
			if(data.cartcontent.cartCount==0){ location.reload();}
			if(data.cartuproduct){
				$.each( data.cartuproduct, function( key, value ) {
					$("#shoppingCartDefault .table-container > table.table-bordered tr").not(".tableHeading").each(function(index){
						if(key==index){
							$(this).find('.cartQuantity input[name="cart_quantity[]"]').val(value.cartQuantity);
							$(this).find('.cartUnitDisplay > div').html(value.cartUnitDisplay);
							$(this).find('.cartTotalDisplay > div').html(value.cartTotalDisplay);
						}
					});
				});
				if(data.msg.status!='success'){
					setPzenAjxHandPop(data, popstimer);
				}
			}
		}else if(action=='cart-update'){
			if(data.cartcontent.cartCount==0){ location.reload();}
			if(data.cartuproduct){
				$.each( data.cartuproduct, function( key, value ) {
					$("#shoppingCartDefault .table-container > table.table-bordered tr").not(".tableHeading").each(function(index){
						var cpid = $(this).find('input[name="products_id[]"]').val();
						if(cpid==value.cartProductsId){
							$(this).find('.cartQuantity input[name="cart_quantity[]"]').val(value.cartQuantity);
							$(this).find('.cartUnitDisplay > div').html(value.cartUnitDisplay);
							$(this).find('.cartTotalDisplay > div').html(value.cartTotalDisplay);
						}
					});
				});
				if(data.msg.status!='success'){
					setPzenAjxHandPop(data, popstimer);
				}
			}
		}else{
			setPzenAjxHandPop(data, popstimer);
		}
	}
	//remove cart page products
	if(action=='remove' || action=='cart-remove' ){
		$('#shoppingCartDefault').find("tr").each(function(){		
			id=$(this).find('[name="products_id[]"]').val();
			if(typeof id  !== "undefined"){
				if(decodeURIComponent(data.rid)==id){
					removePzenCartRow($(this), data, action);
				}
				
			}
		});
	}
}
function setPzenAjxHandPop(data, popstimer){
	if (popTimer) clearTimeout(popTimer);
	if(data.popcontent){
		if($("#pzenajx-wrapper").length){
			$("#pzenajx-wrapper").modal('show');
			$("#quickViewModal").modal("hide");
			$('body').addClass("pzen-ajxmodal-open");
			setTimeout(function(){$("#pzenajx-wrapper").removeClass('pzen-qck');},50);
			if(data.popcontent){
				$("#pzenajx-wrapper .pzenajxinner-content").html(data.popcontent);
			}
		popTimer =	setTimeout(function(){
			if (popstimer == -1) {
				clearTimeout(popTimer);
			} 
			closePzenAjxPopup(); 
			}, popstimer);
		}
	}
}
function setPzenAjxQck(e, data, action=''){
	if($("#pzenajx-wrapper").length){
		if(action=='qck'){
			$("#pzenajx-wrapper").addClass('pzen-qck');
		}
		$("#pzenajx-wrapper").modal('show');
		if(data){
			$("#pzenajx-wrapper .pzenajxinner-content").html(data);
		}
	}
}
function closePzenAjxPopup(){
	clearTimeout(popTimer);
	setTimeout(function(){$("#pzenajx-wrapper").removeClass('pzen-qck');},400);
	$("#pzenajx-wrapper").modal('hide');
	$('body').removeClass("pzen-ajxmodal-open");
}
function removePzenCartRow(e, data='', action=''){
	$("#pzenajx-wrapper").modal('hide');
	if(e){e.fadeOut(300, function() { $(this).remove(); });}
	if(data){if(data.cartcontent.cartCount==0){ location.reload();}	}
	
	closePzenAjxPopup();
}
</script>
<?php } ?>