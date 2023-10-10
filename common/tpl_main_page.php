<?php
/**
 * Common Template - tpl_main_page.php
 * 
 * BOOTSTRAP v3.3.0
 *
 * Governs the overall layout of an entire page<br />
 * Normally consisting of a header, left side column. center column. right side column and footer<br />
 * For customizing, this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * - make a directory /templates/my_template/privacy<br />
 * - copy /templates/templates_defaults/common/tpl_main_page.php to /templates/my_template/privacy/tpl_main_page.php<br />
 * <br />
 * to override the global settings and turn off columns un-comment the lines below for the correct column to turn off<br />
 * to turn off the header and/or footer uncomment the lines below<br />
 * Note: header can be disabled in the tpl_header.php<br />
 * Note: footer can be disabled in the tpl_footer.php<br />
 * <br />
 * $flag_disable_header = true;<br />
 * $flag_disable_left = true;<br />
 * $flag_disable_right = true;<br />
 * $flag_disable_footer = true;<br />
 * <br />
 * // example to not display right column on main page when Always Show Categories is OFF<br />
 * <br />
 * if ($current_page_base == 'index' and $cPath == '') {<br />
 *  $flag_disable_right = true;<br />
 * }<br />
 * <br />
 * example to not display right column on main page when Always Show Categories is ON and set to categories_id 3<br />
 * <br />
 * if ($current_page_base == 'index' and $cPath == '' or $cPath == '3') {<br />
 *  $flag_disable_right = true;<br />
 * }<br />
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Aug 10 Modified in v1.5.7a $
 */

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

/** bof DESIGNER TESTING ONLY: */
// $messageStack->add('header', 'this is a sample error message', 'error');
// $messageStack->add('header', 'this is a sample caution message', 'caution');
// $messageStack->add('header', 'this is a sample success message', 'success');
// $messageStack->add('main', 'this is a sample error message', 'error');
// $messageStack->add('main', 'this is a sample caution message', 'caution');
// $messageStack->add('main', 'this is a sample success message', 'success');
/** eof DESIGNER TESTING ONLY */

// the following IF statement can be duplicated/modified as needed to set additional flags

if (in_array($current_page_base, explode(',', str_replace(' ', '', 'product_info, document_general_info, document_product_info, product_music_info, product_free_shipping_info, shopping_cart, checkout_shipping, checkout_shipping_address, checkout_payment, checkout_payment_address, checkout_confirmation, checkout_success,return_policy,search_result')))) {
    $flag_disable_right = true;
}
if (in_array($current_page_base, explode(',', str_replace(' ', '', 'checkout_shipping, checkout_shipping_address, checkout_payment, checkout_payment_address, checkout_confirmation')))) {
    $flag_disable_left = true;
}

// ZCA BOOTSTRAP TEMPLATE
if (!empty($flag_disable_right) || COLUMN_RIGHT_STATUS === '0' || SET_COLUMN_RIGHT_LAYOUT === '0') {
    $flag_disable_right = true;
    $box_width_right = '0';
    $box_width_right_new = '';
} else {
    $box_width_right = SET_COLUMN_RIGHT_LAYOUT;
    $box_width_right_new = 'col-sm-' . SET_COLUMN_RIGHT_LAYOUT . ' d-none d-lg-block';
}

if (!empty($flag_disable_left) || COLUMN_LEFT_STATUS === '0' || SET_COLUMN_LEFT_LAYOUT === '0') {
    $flag_disable_left = true;
    $box_width_left = '0';
    $box_width_left_new = '';
} else {
    $box_width_left = SET_COLUMN_LEFT_LAYOUT;
    $box_width_left_new = 'col-sm-' . SET_COLUMN_LEFT_LAYOUT . ' d-none d-lg-block';
}

$side_columns_total = $box_width_left + (isset($cPath) && (int)$cPath ? 0 : (isset($_GET['main_page']) && ($_GET['main_page']=='best_sellers' || $_GET['main_page']=='products_new' || $_GET['main_page']=='create_account' || $_GET['main_page']=='more_news' || $_GET['main_page']=='news_archive' || $this_is_home_page) ? 0 : $box_width_right));
//($this_is_home_page ? 3 : $box_width_right);
$center_column = '12'; // This value should not be altered
$center_column_width = $center_column - $side_columns_total;

$body_id = ($this_is_home_page) ? 'indexHome' : str_replace('_', '', $_GET['main_page']);
?>
<body id="<?php echo $body_id . 'Body'; ?>"<?php if ($zv_onload !== '') echo ' onload="' . $zv_onload . '"'; ?>>
<?php
//require $template->get_template_dir('tpl_instant_search_result_default.php', DIR_WS_TEMPLATE, $current_page_base, 'templates') . '/tpl_instant_search_result_default.php'; 

if (defined('BS4_AJAX_SEARCH_ENABLE') && BS4_AJAX_SEARCH_ENABLE === 'true') {
    require $template->get_template_dir('tpl_ajax_search.php', DIR_WS_TEMPLATE, $current_page_base, 'modalboxes') . '/tpl_ajax_search.php';
}
?>
<div class="container-fluid" id="mainWrapper"> 
<?php
if (SHOW_BANNERS_GROUP_SET1 !== '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET1)) {
    if ($banner->RecordCount() > 0) {
        $find_banners = zen_build_banners_group(SHOW_BANNERS_GROUP_SET1);
        $banner_group = 1;
?>
    <div class="zca-banner bannerOne rounded">
<?php 
        if (ZCA_ACTIVATE_BANNER_ONE_CAROUSEL === 'true') {
            require $template->get_template_dir('tpl_zca_banner_carousel.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_zca_banner_carousel.php'; 
        } else {
            echo zen_display_banner('static', $banner);
        }
?>
    </div>
<?php
    }
}
?>
    <div class="row mb-3">
        <div class="col">
<?php
/**
* prepares and displays header output
*
*/
if (CUSTOMERS_APPROVAL_AUTHORIZATION === '1' && CUSTOMERS_AUTHORIZATION_HEADER_OFF === 'true' && ($_SESSION['customers_authorization'] != 0 || !zen_is_logged_in())) {
    $flag_disable_header = true;
}
require $template->get_template_dir('tpl_header.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_header.php';
?>

        </div>
    </div>

    <div class="row">
<?php
if (COLUMN_LEFT_STATUS === '0' || (CUSTOMERS_APPROVAL === '1' && !zen_is_logged_in()) || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF === 'true' && ($_SESSION['customers_authorization'] != 0 || !zen_is_logged_in()))) {
    // global disable of column_left
    $flag_disable_left = true;
}
if (empty($flag_disable_left)) {
?> 
        <div id="navColumnOne" class="<?php echo $box_width_left_new; ?>">
			<div class="search-mobile--wrapper" style="display: none;"></div>			
<?php
 /**
  * prepares and displays left column sideboxes
  *
  */
?>
            <div id="navColumnOneWrapper"><?php require DIR_WS_MODULES . zen_get_module_directory('column_left.php'); ?>
<div class="leftBoxContainer facet-box collapse-block open" id="sidebar-banner">
<h2 class="leftBoxHeading collapse-block__title" id="sidebar-bannerHeading">Bestsellers</h2>
	<div class="sideBoxContent collapse-block__content">
		<div id="sidebar-bannerContent" class="bannerAsid mySwiper" style="position: relative;">
<div class="swiper-wrapper">
<div class="text-center swiper-slide"><a href="index.php?main_page=product_info&amp;products_id=84" target="_blank"><img src="images/wait.gif" data-src="includes/templates/yourstore/images/banners/sidebar-banner1-hs1_1509367992_1666177376.webp" alt="" width="270" height="361" class="img-responsive-inline b-lazy" /></a></div>
<div class="text-center swiper-slide"><a href="index.php?main_page=product_info&amp;products_id=503" target="_blank"><img src="images/wait.gif" data-src="includes/templates/yourstore/images/banners/sidebar-banner1-hs8_1509368093_1666177389.webp" alt="" width="270" height="361" class="img-responsive-inline b-lazy" /></a></div>
<div class="text-center swiper-slide"><a href="index.php?main_page=product_info&amp;products_id=354" target="_blank"><img src="images/wait.gif" data-src="includes/templates/yourstore/images/banners/sidebar-banner3-hs24_1509368352_1666177399.webp" alt="" width="270" height="361" class="img-responsive-inline b-lazy" /></a></div>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</div>

					</div>
</div>
	    </div>
        </div>
<script>
function bannerAsid(carousel) {
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      effect: "fade",
      speed: 2000
    });

/*	carousel.slick({
		infinite: true,
		dots: false,
		arrows: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
        autoplaySpeed: 3000,
	});*/
}
if(jQuery('.bannerAsid').length>0){
	bannerAsid(jQuery('.bannerAsid'),1,1,1,1,1);
}

</script>

<?php
}
?>
        <div class="col-12 col-lg-<?php echo $center_column_width; ?>">
<?php
if (!$breadcrumb->isEmpty() && (DEFINE_BREADCRUMB_STATUS === '1' || (DEFINE_BREADCRUMB_STATUS === '2' && !$this_is_home_page))) {
?>
            <div id="navBreadCrumb">
                <ol class="breadcrumb">
<?php
    // -----
    // Getting the breadcrumbs to produce valid HTML, since the breadcrumb class adds the separator after the closing </li>.
    //
    // 1. Replace all occurrences of the separator followed by 'whitespace' characters.
    // 2. Insert the separator into a span at the beginning of each breadcrumb element.
    // 3. Remove the leading separator from the first breadcrumb element and output.
    //
    $breadcrumbs = preg_replace('^' . BREAD_CRUMBS_SEPARATOR . '\s?^', '', $breadcrumb->trail(BREAD_CRUMBS_SEPARATOR, '<li>', '</li>'));
    $breadcrumbs = str_replace('<li>', '<li><span class="breadcrumb-separator">' . BREAD_CRUMBS_SEPARATOR . '</span>', $breadcrumbs);
    echo preg_replace('^<li><span class="breadcrumb-separator">' . BREAD_CRUMBS_SEPARATOR . '</span>^', '<li>', $breadcrumbs, 1);
?>
                </ol>
            </div>
<?php
}

if (SHOW_BANNERS_GROUP_SET3 !== '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET3)) {
    if ($banner->RecordCount() > 0) {
        $find_banners = zen_build_banners_group(SHOW_BANNERS_GROUP_SET3);
        $banner_group = 3;
?>
            <div class="zca-banner bannerThree rounded">
<?php 
        if (ZCA_ACTIVATE_BANNER_THREE_CAROUSEL == 'true') {
            require $template->get_template_dir('tpl_zca_banner_carousel.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_zca_banner_carousel.php'; 
        } else {
            echo zen_display_banner('static', $banner);
        }
?>
            </div>
<?php
    }
}

if ($messageStack->size('upload') > 0) {
    echo $messageStack->output('upload');
}
if ($messageStack->size('main_content') > 0) {
    echo $messageStack->output('main_content');
}

/**
 * prepares and displays center column
 *
 */
require $body_code;

if (SHOW_BANNERS_GROUP_SET4 !== '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET4)) {
    if ($banner->RecordCount() > 0) {
        $find_banners = zen_build_banners_group(SHOW_BANNERS_GROUP_SET4);
        $banner_group = 4;
?>
            <div class="zca-banner bannerFour rounded">
<?php 
        if (ZCA_ACTIVATE_BANNER_FOUR_CAROUSEL == 'true') {
            require $template->get_template_dir('tpl_zca_banner_carousel.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_zca_banner_carousel.php'; 
        } else {
            echo zen_display_banner('static', $banner);
        }
?>
            </div>
<?php
    }
}
?>
        </div>
<?php
if (COLUMN_RIGHT_STATUS == 0 || (CUSTOMERS_APPROVAL === '1' && !zen_is_logged_in()) || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF === 'true' && ($_SESSION['customers_authorization'] != 0 || !zen_is_logged_in()))) {
  // global disable of column_right
    $flag_disable_right = true;
}
if (empty($flag_disable_right)) {
?>    
        <div id="navColumnTwo" class="<?php echo $box_width_right_new; ?>">
<?php
 /**
  * prepares and displays right column sideboxes
  *
  */
?>
            <div id="navColumnTwoWrapper"><?php require DIR_WS_MODULES . zen_get_module_directory('column_right.php'); ?></div>
        </div>
<?php
}
?>
    </div>

    <div class="row mt-3">
        <div class="col">
<?php
/**
 * prepares and displays footer output
 *
 */
if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_FOOTER_OFF === 'true' && ($_SESSION['customers_authorization'] != 0 || !zen_is_logged_in())) {
    $flag_disable_footer = true;
}
require $template->get_template_dir('tpl_footer.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_footer.php';

if (defined('DISPLAY_PAGE_PARSE_TIME') && DISPLAY_PAGE_PARSE_TIME === 'true') {
?>
            <div class="text-center">Parse Time: <?php echo isset($parse_time) ? $parse_time : 'n/a'; ?> - Number of Queries: <?php echo $db->queryCount(); ?> - Query Time: <?php echo $db->queryTime(); ?></div>
<?php
}
?>
        </div>
    </div>

<!--bof- banner #6 display -->
<?php
if (SHOW_BANNERS_GROUP_SET6 !== '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET6)) {
    if ($banner->RecordCount() > 0) {
        $find_banners = zen_build_banners_group(SHOW_BANNERS_GROUP_SET6);
        $banner_group = 6;
?>
    <div class="zca-banner bannerSix rounded">
<?php 
        if (ZCA_ACTIVATE_BANNER_SIX_CAROUSEL == 'true') {
            require $template->get_template_dir('tpl_zca_banner_carousel.php', DIR_WS_TEMPLATE, $current_page_base, 'common') . '/tpl_zca_banner_carousel.php'; 
        } else {
            echo zen_display_banner('static', $banner);
        }
?>
    </div>
<?php
    }
}
?>
<!--eof- banner #6 display -->
<?php /* add any end-of-page code via an observer class */
$zco_notifier->notify('NOTIFY_FOOTER_END', $current_page);
?>
    <a href="#" id="back-to-top" class="btn" title="<?php echo BUTTON_BACK_TO_TOP_TITLE ?>" aria-label="<?php echo BUTTON_BACK_TO_TOP_TITLE ?>" role="button"><img src="/images/icons-svg/icon-circle-up-min.svg" alt="<?php echo BUTTON_BACK_TO_TOP_TITLE ?>" height="16" width="16"></a>
</div>
<script>
$(function() {
	$("label:contains('ID tag')").parent().parent().hide();
//	$("label:contains('Engraving line')").parent().parent().hide();	
	$('input[type=text]').each(function(){
	    var $this = $(this);
	    if($this.attr('placeholder') && $this.attr('placeholder').includes('Engraving line')){
	        $this.parent().parent().hide();	
	    }
 	});
});	
	
( function() {

	$('.search-mobile--wrapper').click(function(){
		$('#navColumnOneWrapper').removeClass('panded'); 
		$('.button_filter-close').removeClass('panded'); 
		$('.search-mobile--wrapper').removeClass('panded');
	})
	
	var yforremove = document.getElementsByTagName("iframe");
	var bdy;
	var framesrc = '';
	
	
	for(var i=0;i<yforremove.length ;i++){
		if( yforremove[i].hasAttribute("src")){
			framesrc = yforremove[i].getAttribute("src");
			if(framesrc.indexOf("youtube.com/embed/")!=-1){			
				isrc = framesrc.substring(framesrc.indexOf('youtube.com/embed/')+18);
	
				bdy = yforremove[i].parentNode;
				yforremove[i].remove();
				
				var newytb = document.createElement('div');
				newytb.id = 'nyout'+i;
				newytb.className = 'youwrapper';
				newytb.innerHTML = '<div class="youtube" data-embed="'+isrc+'" data-alt=""><div class="play-button"></div></div>';

				bdy.appendChild(newytb);
				i--;
			}
		}
/*	  if( yforremove[i].hasAttribute("src")){
		framesrc = yforremove[i].getAttribute("src");
		if(framesrc.indexOf("youtube.com/embed/")!=-1){
			isrc = framesrc.substring(framesrc.indexOf('youtube.com/embed/')+18);
console.log(isrc);			
			bdy = yforremove[i].parentNode;
			yforremove[i].remove();
					

			var newytb = document.createElement('div');
			newytb.id = 'nyout'+i;
			newytb.className = 'youwrapper';
			newytb.innerHTML = '<div class="youtube" data-embed="'+isrc+'" data-alt=""><div class="play-button"></div></div>';

			bdy.appendChild(newytb);

		}else{
			console.log('notsrc '+framesrc);
		}
	  }else{
		  console.log('not '+i);
	  }*/
	}	
	
	var youtube = document.querySelectorAll( ".youtube" );
	
	for (var i = 0; i < youtube.length; i++) {
		var isrc = youtube[i].dataset.embed;		
		if(isrc.indexOf('?')!=-1){ isrc=isrc.substring(0,isrc.indexOf('?'))  }
		var source = "https://i.ytimg.com/vi_webp/"+ isrc +"/sddefault.webp";

	
		var image = new Image();
				image.src = source;
				image.alt = youtube[i].dataset.alt;
				image.addEventListener( "load", function() {
					youtube[ i ].appendChild( image );
				}( i ) );
		
				youtube[i].addEventListener( "click", function() {

					var iframe = document.createElement( "iframe" );

							iframe.setAttribute( "frameborder", "0" );
							iframe.setAttribute( "allowfullscreen", "" );
//							iframe.setAttribute( 'style', 'width: 100%;min-height: 463px;');
							iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed);
//							iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

							this.innerHTML = "";
							this.appendChild( iframe );
				} );	
	};

					  var cssFix = function() {
							var typ = 0;
							var u = navigator.userAgent.toLowerCase();
							var bdy ;
							function is_mobile(uagent)
							{
								var mobilekeywords = ["mobile" , "android" , "iphone" , "ipad" , "symbian" ];
								for(var i = 0 ; i < mobilekeywords.length ; i++ )
								{
									if(uagent.indexOf(mobilekeywords[i])!=-1)
										return true;
								};
								return false ;
							};
							if(is_mobile(u))
							{
								var forremove = document.getElementsByTagName("iframe");
								var framesrc = '';

								for(i=0;i<forremove.length ;i++)
								{
									if( forremove[i].hasAttribute("src"))
									{
										framesrc = forremove[i].getAttribute("src");
										if(framesrc.indexOf("/3DProducts/")!=-1)
										{
											bdy = forremove[i].parentNode;
											forremove[i].remove();

											webrotate = document.createElement("a");
											typ = document.createAttribute("href");
											typ.value = framesrc ;

											webrotate.attributes.setNamedItem(typ);
											webrotate.setAttribute('target', '_blank');
											webrotate.innerHTML = "see 3D view!";
											bdy.appendChild(webrotate);

										}
									}
								}
							}
						}();	
	
} )();	

$(document).ready(function () {
    $('a.imageModal').on('click', function() {
        $('.showimage').attr('src', $(this).find('img').attr('src'));
        $('#myModal').modal('show');   
    });
    
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
});	

</script>	
	<script src="includes/templates/bootstrap/jscript/blazy.min.js"></script>
	<script src="includes/templates/bootstrap/jscript/connect_blazy.min.js"></script>

<!-- Modal (newsletter) -->		
		<div class="modal  modal--bg fade"  id="newsletterModal" data-pause=15000>
		  <div class="modal-dialog white-modal">
		    <div class="modal-content modal-md ">
<!--		      <div class="modal-bg-image bottom-right"> 
			      <img src="includes/templates/yourstore/images/uploads/newsletter-bg.png" alt="" class="img-responsive"> 
			  </div>//-->
		      <div class="modal-block">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"><img src="/images/mobile-icons/icon-close-popup.svg"></span></button>
			      </div>
			      <div class="modal-newsletter text-center">
			        <h2 class="text-uppercase modal-title">10% OFF!</h2>
				<div class="subscribe-box">
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">

<div id="icontactSignupFormWrapper355"><script type="text/javascript" async src="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=355&cid=742393&lid=11217&divid=icontactSignupFormWrapper355"></script></div>

<!--   <form action="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/?id=193&cid=1370296&lid=5728" class="validate" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="">
      <label for="mce-EMAIL">Subscribe and get 10% discount<br>for your first order</label>
      <input class="email" id="mce-EMAIL" name="data[email]" placeholder="Enter your email" required="" type="email" value="" /> 
      <div style="position: absolute; left: -5000px;">
         <input type="checkbox" name="data[listGroups][]" value="79372" checked="checked">
      </div>

      <div class="clear"><input class="btn btn--ys btn--xl" id="mc-embedded-subscribe" name="GET IT NOW" type="submit" value="GET IT NOW!" /></div>
   </form>//-->
</div>			        </div>
				<a class="modal-action" href="javascript: void(0);" onclick="$('#newsletterModal').removeClass('show').hide();">Ask me later</a>
				<a class="modal-action" style="margin-bottom: 23px;" onclick="close_pop();" href="javascript: void(0);">Don't show again</a>
			      </div>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- / Modal (newsletter) -->		<!--bof- banner #6 display -->
<style>
#ic_signupform .elcontainer {
    max-width: none;
    padding: 0px;
}
</style>
<script>
function getCookie(c_name) {
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1) {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1) {
        c_value = null;
    } else {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1) {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start, c_end));
    }
    return c_value;
}

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}
  function close_pop() {
    setCookie('subscribePop', true, 365);
    $('#newsletterModal').removeClass('show').hide();
    return false;
  }
/*
    if (!getCookie('subscribePop') || getCookie('subscribePop')!='true') {
		$(function($) {
			"use strict";
			if ($('#newsletterModal').length) {
				var pause = $('#newsletterModal').attr('data-pause');
				setTimeout(function() {
					$('#newsletterModal').addClass('show').show();

//					$('#newsletterModal').modal('show');
				}, pause);
			}
		})
		$('#newsletterModal .close').click(function () {
		   $('#newsletterModal').removeClass('show').hide();

//		   $('#newsletterModal').modal('hide');
		});
    }*/
</script>
<style>
/*=== modal ===*/
.form-group-top label {
    font-size: 18px;
    margin-bottom: 13px;
    color: #FFF;
}
body.modal-open{overflow: hidden !important;}
.product-popup{position: relative;background: #ffffff;margin: 20px auto;padding: 0;width: 90%;height: 90%;max-width: 1170px;max-height: 750px;}
.product-popup .product-popup-content{overflo-y: scroll;}
.product-popup .container-fluid{padding: 0;background: #ffffff;}
.product-popup .product-info{padding: 25px 40px 15px;margin: 0 0 0 -15px;}
.product-popup .mfp-close{color: #ffffff;right: -37px;top: -37px;}
/*=== /modal ===*/
.modal-filter{cursor: pointer;}
/* modal size  */
.modal-sm{max-width: 372px;}
.modal-md{max-width: 370px !important;margin: 0 auto;}
.img-responsive1{max-width: 100%;}
/* /modal size */
/* modal style  */
.modal-dialog.white-modal { padding: 50px; }
.white-modal .modal-content{-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;box-shadow: 0 0px 50px 0px rgba(0, 0, 0, 0.40);padding: 30px; padding-bottom: 0px; border-color: transparent; background-color: #14299A; color: #fff; border-radius: 5px;}
@media (max-width: 767px){.white-modal .modal-content{padding: 20px;}}
.white-modal .modal-header{border: none;padding: 0;margin: 0 0 18px 0; display: block; position: absolute; top: 0px; right: 11px; }
.white-modal .modal-header .close{font-size: 29px;-moz-opacity: 1;-khtml-opacity: 1;-webkit-opacity: 1;opacity: 1; transition: 'delay: 1s;';-webkit-transition: 'delay: 1s;' 0.3s 0s ease;-moz-transition: 'delay: 1s;' 0.3s 0s ease;-ms-transition: 'delay: 1s;' 0.3s 0s ease;-o-transition: 'delay: 1s;' 0.3s 0s ease;transition: 'delay: 1s;' 0.3s 0s ease;}
.white-modal .modal-header .close:hover{color: #333333;}
.white-modal .modal-header .modal-title{font-size: 21px;line-height: 1.2em;padding: 0;margin: 0;}
.white-modal .modal-body{font-weight: lighter;padding: 0 0 42px 0;}
.white-modal .indent-bot-none{padding-bottom: 0;}
.white-modal .modal-footer{text-align: inherit;border: none;padding: 0;}
.white-modal .modal-footer.text-left{text-align: left;}
.white-modal .modal-footer.text-center{text-align: center;}
.white-modal .modal-footer.text-right{text-align: right;}
/* /modal style  */
/* modal center center */
.modal{text-align: center;padding: 0 !important;}
@media (min-width: 450px){.modal:before{content: '';display: inline-block;height: 100%;vertical-align: middle;margin-right: -4px;/* Adjusts for spacing */
}}
.modal .modal-dialog{display: inline-block;text-align: left;vertical-align: middle;overflow: hidden;}
/* /modal center center */
.modal{z-index: 77777777;}
/*.modal-backdrop{z-index: 7777777;}*/
#modalAddToCart.modal, #modalAddToCartError.modal{z-index: 7777777777;}
.modal-bg-image{position: absolute;z-index: 0;width: 70%;}
.modal-bg-image.bottom-right{right: 0;bottom: 0;}
.modal-bg-image.bottom-left{left: 0;bottom: 0;}
.modal-bg-image.top-left{left: 0;top: 0;}
.modal-bg-image.top-right{right: 0;top: 0;}
/* modal-newsletter  */
.modal-newsletter{padding-bottom: 7px;position: relative;z-index: 2;}
.modal-newsletter .checkbox-group{display: inline-block;}
.modal-newsletter .checkbox-group .box{margin-top: 0;display: inline-block;}
.modal-newsletter .checkbox-group .check{top: 5px;}
.modal-newsletter .logo{margin-bottom: 47px;max-height: 80px;}
.modal-newsletter .modal-title{font-size: 21px;line-height: 67px;padding-bottom: 0px;}
.modal-newsletter p{padding-bottom: 7px;}
.modal-newsletter .row-subscibe{font-size: 0;line-height: 0;padding: 27px 0 27px 0;}
.modal-newsletter .row-subscibe input{height: 60px;border: 1px solid #e5e5e5;padding: 2.3% 2.5%;font-size: 18px;line-height: 1.2em;color: #777777;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;}
.modal-newsletter .row-subscibe button{font-size: 18px;height: 60px;}
/*.modal-newsletter .checkbox-group label{font-size: 12px;padding-left: 25px;}*/
.modal-newsletter p{margin-bottom: 0px;}
@media (max-width: 767px){#newsletterModal .modal-newsletter .row-subscibe input{width: 80%;padding: 2.3% 3%; }
.modal-dialog.white-modal { padding: 0px; }
.modal-content.modal-md { margin-top: 100px; }
#newsletterModal .modal-newsletter .row-subscibe button{position: relative;right: auto;margin-top: 15px;}
#newsletterModal .modal-newsletter .logo{max-height: 75px;}}
@media (max-width: 420px){#newsletterModal .modal-newsletter .logo{max-height: 59px;}}
@media (max-width: 768px){#newsletterModal button.btn--ys.btn--xl{padding: 17px 14px !important;}}
/* /modal-newsletter  */
h2.modal-title {
	font-size: 67px !important;
	font-weight: 700;
	margin-bottom: 20px;
	color: #F9D932;
	padding-bottom: 0px !important;
}
.modal-newsletter p.plakat {
	font-size: 18px;
	margin-bottom: 15px;
}
input#mce-EMAIL {
    clear: left;
    position: relative;
    width: 100%;
    max-width: 285px;
    /* padding-bottom: 1%; */
    min-height: 41px;
    padding: 1%;
    margin-bottom: 16px;
    border-radius: 5px;
    border: 1px solid #CED4DA;
    font-size: 17px;
}
input#mce-EMAIL::placeholder {
    text-align: center;
    font-size: 17px;
}
.clear .btn--ys {
    position: relative;
    width: 100%;
    min-height: 41px;
    padding: 1%;
    margin-bottom: 30px;
    background-color: #F9D932;
    max-width: 285px;
    color: #000;
    font-size: 17px;
    font-weight: 700;
    border-radius: 5px;
}
#mc_embed_signup label { margin-bottom: 22px; font-size: 18px !important; }
a.modal-action {
    display: block;
    font-size: 18px;
    text-decoration: underline;
    margin-bottom: 13px;
    color: #FFF;
}
</style>
</body>
