<style>
    /* BOOTSTRAP4 Template v3.1.2 */
    /* body */
    body {color: <?php echo ZCA_BODY_TEXT_COLOR; ?>;background-color: <?php echo ZCA_BODY_BACKGROUND_COLOR; ?>;}
    a {color: <?php echo ZCA_BUTTON_LINK_COLOR; ?>;}
    a:hover {color: <?php echo ZCA_BUTTON_LINK_COLOR_HOVER; ?>;}
    .form-control::-webkit-input-placeholder {color: <?php echo ZCA_BODY_PLACEHOLDER; ?>;} 
    .form-control::-moz-placeholder {color: <?php echo ZCA_BODY_PLACEHOLDER; ?>;} 
    .form-control:-ms-input-placeholder {color: <?php echo ZCA_BODY_PLACEHOLDER; ?>;}
    .form-control::-ms-input-placeholder {color: <?php echo ZCA_BODY_PLACEHOLDER; ?>;}
    .form-control::placeholder {color: <?php echo ZCA_BODY_PLACEHOLDER; ?>;}
    .required-info, .alert {color: <?php echo ZCA_BODY_PLACEHOLDER; ?>;}

    #dynamicfilterContent { padding-left: 15px; }
    .btn {color: <?php echo ZCA_BUTTON_TEXT_COLOR; ?>;background-color: <?php echo ZCA_BUTTON_COLOR; ?>;border-color: <?php echo ZCA_BUTTON_BORDER_COLOR; ?>;}
    .btn:hover {color: <?php echo ZCA_BUTTON_TEXT_COLOR_HOVER; ?>;background-color: <?php echo ZCA_BUTTON_COLOR_HOVER; ?>;border-color: <?php echo ZCA_BUTTON_BORDER_COLOR_HOVER; ?>;}

    /* header */
    #headerWrapper {background-color: <?php echo ZCA_HEADER_WRAPPER_BACKGROUND_COLOR; ?>;}
    #tagline {color: <?php echo ZCA_HEADER_TAGLINE_TEXT_COLOR; ?>;}

    /* header nav bar */
    nav.navbar {background-color: <?php echo ZCA_HEADER_NAV_BAR_BACKGROUND_COLOR; ?>;}

    /* header nav bar links */
    nav.navbar a.nav-link {color: <?php echo ZCA_HEADER_NAVBAR_LINK_COLOR; ?>;}
    nav.navbar a.nav-link:hover {color: <?php echo ZCA_HEADER_NAVBAR_LINK_COLOR_HOVER; ?>;}

    /* header nav bar buttons */
    /*
    nav.navbar .navbar-toggler {color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_TEXT_COLOR; ?>;background-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_COLOR; ?>;border-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_BORDER_COLOR; ?>; height: 40px;}
    nav.navbar .navbar-toggler:hover {color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_TEXT_COLOR_HOVER; ?>;background-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_COLOR_HOVER; ?>;border-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_BORDER_COLOR_HOVER; ?>;}
    */
    /* header ezpage bar */
    #ezpagesBarHeader {background-color: <?php echo ZCA_HEADER_EZPAGE_BACKGROUND_COLOR; ?>;}
    #ezpagesBarHeader a.nav-link {color: <?php echo ZCA_HEADER_EZPAGE_LINK_COLOR; ?>;}
    #ezpagesBarHeader a.nav-link:hover {color: <?php echo ZCA_HEADER_EZPAGE_LINK_COLOR_HOVER; ?>;}

    /* header category tabs */
    #navCatTabs a {color: <?php echo ZCA_HEADER_TABS_TEXT_COLOR; ?>;background-color: <?php echo ZCA_HEADER_TABS_COLOR; ?>;}
    #navCatTabs a:hover {color: <?php echo ZCA_HEADER_TABS_TEXT_COLOR_HOVER; ?>;background-color: <?php echo ZCA_HEADER_TABS_COLOR_HOVER; ?>;}

    /* breadcrumbs */
    #navBreadCrumb ol {background-color: <?php echo ZCA_BODY_BREADCRUMBS_BACKGROUND_COLOR; ?>;}
    #navBreadCrumb li {color: <?php echo ZCA_BODY_BREADCRUMBS_TEXT_COLOR; ?>;}
    #navBreadCrumb li a {color: <?php echo ZCA_BODY_BREADCRUMBS_LINK_COLOR; ?>;}
    #navBreadCrumb li a:hover {color: <?php echo ZCA_BODY_BREADCRUMBS_LINK_COLOR_HOVER; ?>;}

    /* footer */
    #footerWrapper {color: <?php echo ZCA_FOOTER_WRAPPER_TEXT_COLOR; ?>;background-color: <?php echo ZCA_FOOTER_WRAPPER_BACKGROUND_COLOR; ?>; padding-top: 20px; }
    .legalCopyright, .legalCopyright a {color: <?php echo ZCA_FOOTER_WRAPPER_TEXT_COLOR; ?>; }
    .legalCopyright { padding: 10px 20px; }
    /* footer ezpage bar */
    #ezpagesBarFooter {background-color: <?php echo ZCA_FOOTER_EZPAGE_BACKGROUND_COLOR; ?>;}
    #ezpagesBarFooter a.nav-link {color: <?php echo ZCA_FOOTER_EZPAGE_LINK_COLOR; ?>;}
    #ezpagesBarFooter a.nav-link:hover {color: <?php echo ZCA_FOOTER_EZPAGE_LINK_COLOR_HOVER; ?>;}

    /* sideboxes */
    /* sideboxes card */
    .leftBoxCard, .rightBoxCard {color: <?php echo ZCA_SIDEBOX_TEXT_COLOR; ?>;background-color: <?php echo ZCA_SIDEBOX_BACKGROUND_COLOR; ?>;}

    /* sideboxes card header */
    .leftBoxHeading, .rightBoxHeading {color: <?php echo ZCA_SIDEBOX_HEADER_TEXT_COLOR; ?>;background-color: <?php echo ZCA_SIDEBOX_HEADER_BACKGROUND_COLOR; ?>; }
    .leftBoxHeading a, .rightBoxHeading a {color: <?php echo ZCA_SIDEBOX_HEADER_LINK_COLOR; ?>;}
    .leftBoxHeading a:hover, .rightBoxHeading a:hover {color: <?php echo ZCA_SIDEBOX_HEADER_LINK_COLOR_HOVER; ?>;}
    #categoriesContent .badge, #documentcategoriesContent .badge {color: <?php echo ZCA_SIDEBOX_COUNTS_COLOR; ?>;background-color: <?php echo ZCA_SIDEBOX_COUNTS_BACKGROUND_COLOR; ?>; }
    .leftBoxCard .list-group-item, .rightBoxCard .list-group-item {color: <?php echo ZCA_SIDEBOX_LINK_COLOR; ?>;background-color: <?php echo ZCA_SIDEBOX_LINK_BACKGROUND_COLOR; ?>;}
    .leftBoxCard .list-group-item:hover, .rightBoxCard .list-group-item:hover {color: <?php echo ZCA_SIDEBOX_LINK_COLOR_HOVER; ?>;background-color: <?php echo ZCA_SIDEBOX_LINK_BACKGROUND_COLOR_HOVER; ?>;}

    /* centerboxes */
    .centerBoxContents.card {color: <?php echo ZCA_CENTERBOX_TEXT_COLOR; ?>;background-color: <?php echo ZCA_CENTERBOX_BACKGROUND_COLOR; ?>;}
    .centerBoxHeading {color: <?php echo ZCA_CENTERBOX_HEADER_TEXT_COLOR; ?>;background-color: <?php echo ZCA_CENTERBOX_HEADER_BACKGROUND_COLOR; ?>;}

    /* category cards */
    .categoryListBoxContents.card {color: <?php echo ZCA_CENTERBOX_TEXT_COLOR; ?>;background-color: <?php echo ZCA_CENTERBOX_BACKGROUND_COLOR; ?>;}
    .categoryListBoxContents {background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR; ?>;}
    .categoryListBoxContents:hover {background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;}

    /* pagination links */
    a.page-link {color: <?php echo ZCA_BUTTON_PAGEINATION_TEXT_COLOR; ?>;background-color: <?php echo ZCA_BUTTON_PAGEINATION_COLOR; ?>;border-color: <?php echo ZCA_BUTTON_PAGEINATION_BORDER_COLOR; ?>;}
    a.page-link:hover {color: <?php echo ZCA_BUTTON_PAGEINATION_TEXT_COLOR_HOVER; ?>;background-color: <?php echo ZCA_BUTTON_PAGEINATION_COLOR_HOVER; ?>;border-color: <?php echo ZCA_BUTTON_PAGEINATION_BORDER_COLOR_HOVER; ?>;}
    .page-item.active span.page-link {color: <?php echo ZCA_BUTTON_PAGEINATION_ACTIVE_TEXT_COLOR; ?>;background-color: <?php echo ZCA_BUTTON_PAGEINATION_ACTIVE_COLOR; ?>;}

    /* product cards */
    .sideBoxContentItem {background-color: <?php echo ZCA_SIDEBOX_CARD_BACKGROUND_COLOR; ?>;}
    .sideBoxContentItem:hover {background-color: <?php echo ZCA_SIDEBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;}
    .centerBoxContents {background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR; ?>;}
    .centerBoxContents:hover {background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;}
    .centerBoxContentsListing:hover {background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;}
    .listingProductImage {max-height: <?php echo (int) IMAGE_PRODUCT_LISTING_WIDTH; ?>px; width: auto; }

    /* product reviews */
    .productReviewCard:hover {background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;}

    /* product prices */
    .productBasePrice {color: <?php echo ZCA_BODY_PRODUCTS_BASE_COLOR; ?>;}
    .normalprice {color: <?php echo ZCA_BODY_PRODUCTS_NORMAL_COLOR; ?>;}
    .productSpecialPrice {color: <?php echo ZCA_BODY_PRODUCTS_SPECIAL_COLOR; ?>;}
    .productPriceDiscount {color: <?php echo ZCA_BODY_PRODUCTS_DISCOUNT_COLOR; ?>;}
    .productSalePrice {color: <?php echo ZCA_BODY_PRODUCTS_SALE_COLOR; ?>;}
    .productFreePrice {color: <?php echo ZCA_BODY_PRODUCTS_FREE_COLOR; ?>;}

    /* product info pages */
    <?php
// -----
// Additional coloring for v3.1.2.
//
    if (defined('ZCA_ADD_TO_CART_TEXT_COLOR')) {
        ?>
        #addToCart-card-header {color: <?php echo ZCA_ADD_TO_CART_TEXT_COLOR; ?>; background-color: <?php echo ZCA_ADD_TO_CART_BACKGROUND_COLOR; ?>;}
        #addToCart-card {border-color: <?php echo ZCA_ADD_TO_CART_BORDER_COLOR; ?>;}
        <?php
    }

    if (defined('ZCA_BUTTON_IN_CART_BACKGROUND_COLOR')) {
        ?>
        .btn.button_add_selected {background:<?php echo ZCA_BUTTON_ADD_SELECTED_BACKGROUND_COLOR; ?>;color:<?php echo ZCA_BUTTON_ADD_SELECTED_TEXT_COLOR; ?>;}
        .btn.button_add_selected:hover {background:<?php echo ZCA_BUTTON_ADD_SELECTED_BACKGROUND_COLOR_HOVER; ?>;color:<?php echo ZCA_BUTTON_ADD_SELECTED_TEXT_COLOR_HOVER; ?>;}
        .btn.button_in_cart {background:<?php echo ZCA_BUTTON_IN_CART_BACKGROUND_COLOR; ?>;color:<?php echo ZCA_BUTTON_IN_CART_TEXT_COLOR; ?>; border-color: #F9D933; font-size: 1.1rem; font-weight: 500; }
        .btn.button_in_cart:hover {background:<?php echo ZCA_BUTTON_IN_CART_BACKGROUND_COLOR_HOVER; ?>; color: #FFFFFF; border-color:<?php echo ZCA_BUTTON_IN_CART_BACKGROUND_COLOR_HOVER; ?>;}
        <?php
    }
    ?>
    nav.navbar .navbar-toggler {color: #FFF; background-color: #F9D933;border-color: #F9D933; height: 56px;}
    nav.navbar .navbar-toggler:hover {color: #FFF;background-color: #F9D933;border-color: #F9D933;}

    #navColumnOneWrapper.panded { 
        width:0 !important;
    }
    #dynamicfilter-leftBoxHeading i, .dynamic-back { display: none; }
    .dyn-filter-wrapper { position: relative; } 
    .button__filter {
        background-color: #162C9C;
        color: #fff;
        position: relative;
        display: none;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin-right: 16px;
        white-space: nowrap;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        padding-left: 16px;
        padding-right: 16px;
        margin-bottom: 20px;
    	padding-top: 10px;
    	padding-bottom: 10px		
    }
    .button__filter i {
        position: static;
        margin-right: 16px;
        transform: none;
    }
    #navColumnOneWrapper {
        display: flex;
        flex-direction: column;
    }
    .button_filter-close { display: none; }
    h2.itemTitle { font-size: 1.25rem; margin-top: 20px; }
    li.btn-right, img.img_bags--mobile, img.img_mini_bags--mobile { display: none; }
    img.img_bags { display: block; }
    /* Ajax cart*/
    .badge--cart {
        position: absolute;
        top: 2;
        right: auto;
        left: 16px;
        font-size: 16px;
        line-height: 1.95em;
        z-index: 0;
        padding: 0;
        width: 31px;
        height: 31px;
        font-weight: 800;
        text-align: center;
        -moz-border-radius: 50%;
        color: #000;
    }
    #ajax-cart-content.dropdown>a span.name-text {
        font-size: 17px;
        position: absolute;
        bottom: 8px;
        right: 12px;
        font-weight: 600;
        color: #000;
    }
    #ajax-cart-content.dropdown>a {
        width: 102px;
        border: 2px solid #F9D933;
        border-radius: 3px;
        display: block;
        float: right;
        height: 56px;
        position : relative; 
        background-color: #F9D933;
    }
    #ajax-cart-content.dropdown>a.dropdown-toggle::after { display: none; }
    #ajax-cart-content.dropdown>a.dropdown-toggle::before {
        content: " ";
        background-image: url(/images/fdt_cart_bl.svg);
        background-repeat: no-repeat;
        display: block;
        position: absolute;
        top: 10px;
        left: 10px;
        width: 40px;
        height: 34px;
        color: #FFF;
    }
	
    p.contact_timing {
		margin: 0px 0px 0px 40px !important;
		/*display: inline-block;
        vertical-align: bottom;
        font-weight: 600;*/
    }
    #logoWrapper { padding-top: 20px; min-height: 108px; }
    div.mobile--contacts {
        display: none;
        padding-top: 25px; 
        text-align: center;
    }
    div.mobile--contacts p {
        margin-bottom: 0px;
        background-color: rgba(204, 204, 204, 0.18);
        padding-bottom: 5px;
        padding-top: 5px;
        font-weight: 600;
    }
    .ajax-cart-content-header .dropdown-menu.show {
        position: absolute;
        background: #fefefe none repeat scroll 0 0;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 9px 12px rgb(0 0 0 / 18%);
        display: block;
        font-size: 13px;
        margin-top: -2px;
        margin-right: 10px;
        padding: 10px;
        right: 0;
        top: 100%;
        opacity: 1;
        transform: translateY(10px);
        transition: all 150ms linear 0s;
        width: 245px;
        z-index: 99;
    }
    .cart .dropdown-menu .cart__close {
        position: absolute;
        right: 10px;
        top: 5px;
        font-size: 20px;
        color: #000;
        cursor: pointer;
    }
    .cart .dropdown-menu .cart__close span {
        display: none;
        font-size: 13px;
        font-weight: 500;
    }
    .pzenajx-minicart .cart__top {
        display: block;
        background: #162c9c none repeat scroll 0 0;
        border-bottom: 1px solid #eee;
        border-radius: 5px 5px 0 0;
        color: #FFF;
        font-size: 14px;
        line-height: 22px;
        margin: -10px -10px 0;
        padding: 10px;
    }
    .pzenajx-minicart ul {
        list-style: outside none none;
        margin: 0;
        padding: 0;
    }
    .pzenajx-minicart ul > .cart__item {
        border-bottom: 1px dashed #eee;
        float: left;
        margin: 0;
        padding: 10px 0;
        position: relative;
        width: 96%;
    }
    .pzenajx-minicart .cart__item .cart__item__image {
        display: inline-block;
        float: left;
        width: 25%;
        text-align: center;
    }
    .pzenajx-minicart .cart__item .cart__item__control {
        position: absolute;
        right: -13px;
        top: 10px;
    }
    .pzenajx-minicart .cart__item .cart__item__info {
        color: #666;
        display: inline-block;
        float: left;
        margin: 0 0 0 5%;
        width: 70%;
    }
    .pzenajx-minicart .cart__item__info__title {
        overflow-wrap: break-word;
        width: 98%;
    }
    .pzenajx-minicart .cart__item .cart__item__info {
        color: #888;
        display: inline-block;
        float: left;
        margin: 0 0 0 3%;
        width: 70%;
    }
    .pzenajx-minicart .cart__item__control .icon-delete {
        font-size: 10px;
        color: #555;
        font-weight: normal;
    }
    .pzenajx-minicart .cart__item .cart__item__image img {
        border: 1px solid #eee;
        height: auto;
        margin: 0 auto;
        max-height: 60px;
        max-width: 100%;
        width: auto;
    }
    .pzenajx-minicart .cart__item .cart__item__info__title > h2 {
        font-size: 13px;
        margin: 0 0 5px;
        color: 
    }
    .pzenajx-minicart .cart__item a {
        color: #555;
        font-weight: normal;
    }
    .pzenajx-minicart .hidden span {
        display: none;
    }
    .pzenajx-minicart .cart__item a.icon-delete {
        font-size: 1.1rem;
    }
    .pzenajx-minicart .cart__bottom {
        background: transparent none repeat scroll 0 0;
        margin: 16px 0 0;
        padding: 0;
        border: none;
        border-radius: 0 0 5px 5px;
        float: left;
        width: 100%;
    }
    .pzenajx-minicart .cart__bottom .cart__total {
        color: #666;
        display: table;
        float: none;
        margin: 0 auto 15px;
        padding: 0;
        text-align: center;
        width: 80%;
    }
    .pzenajx-minicart .cart__bottom .btn {
        display: inline-block;
        float: left;
        margin: 0 2%;
        width: 46%;
    }
    .pzenajx-wrapper .btn, .pzenajx-minicart .btn {
        background: #162C9C none repeat scroll 0 0;
        border: medium none;
        color: #fff;
        cursor: pointer;
        font-size: 15px;
        padding: 6px 15px;
    }
    .pzenajx-minicart .cart__total > span {
        color: #555;
        font-size: 14px;
        font-weight: bold;
    }

    nav.navbar button.navbar-toggler img { display: none; }

    @media (max-width: 1024px) {
        #logoWrapper .cart .badge--cart {
            /*    right: -25px;*/
        }
        #ajax-cart-content.dropdown>a span.name-text,
        #logoWrapper .cart .badge--cart {
            color: #000;
        }
        /*  #ajax-cart-content.dropdown>a {
            background-color: #FFF;
          }*/
        #ajax-cart-content.dropdown>a.dropdown-toggle::before {  background-image: url(/images/fdt_cart_bl.svg); }

    }
    @media (max-width: 1020px) {
        p.contact_timing { display: none; }
        div.mobile--contacts {
            display: block; 
        }
        #logoWrapper { padding-top: 0px;/* min-height: 120px;*/ }
    }
    @media (max-width: 991px){
        #ezpages-leftBoxCard { display: none; }
        .nav-link {
            padding: 0.8rem 0.5rem;
			font-size: 1rem;
        }
        .button__filter {
            display: block;
            width: 100%;
        }
        #dynamicfilter-leftBoxHeading i { display: inline-block; margin-right: 15px;}
        #navColumnOneWrapper {
            display: flex;
            overflow: auto;
            height: 100%;
            position: fixed;
            left: 0px;
            top: 0px;
            flex-direction: column;
            z-index: 10000000;
            width: 0px;
            -webkit-transition: -webkit-transform width .3s ease-in-out;
            -moz-transition: -moz-transform width .3s ease-in-out;
            -o-transition: -o-transform width .3s ease-in-out;
            transition: width .3s ease-in-out;
            /*    transition: 2s;*/
        }
        #dynamicfilterContent { padding-bottom: 40px; }
	li.dFilterLink{
		padding: 0.2rem 0px;
	}
        .dynamic-back {
            display: flex;
            flex-direction: row;
        }
        #navColumnOneWrapper.panded { 
            width: 80% !important;
        }
		#navColumnOneWrapper.panded #dynamicfilter-leftBoxCard #dynamicfilterContent form {
			margin-bottom: 50px;
		}
		.search-mobile--wrapper.panded {
			display: block !important;
		    position: fixed;
		    left: 80%;
		    width: 20%;
		    top: 0px;
		    bottom: 0px;
		    background-color: rgba(0,0,0,0.75);
		    z-index: 1000000000;
		}
        #navColumnOne { display: block !important; }
        .button_filter-close {
            color: #FFF;
            position: fixed;
            bottom: 0px;
            background-color: #162C9C;
            left: 0px;
            right: 0px;
            width: 80%;
            text-align: center;
            height: 64px;
            line-height: 57px;
            font-size: 20px;
        }
	#navColumnOneWrapper.panded #dynamicfilter-leftBoxCard .btn_filter-close-top {
	   display: block !important;
	    position: absolute;
	    color: #ffffff;
	    right: 5px;
	    top: 0px;
	    background-color: transparent;
	    height: 24px;
	    width: 24px;
	    line-height: 22px;
	    font-size: 22px;
	    font-weight: 700;
	    padding-top: -4px;
	    border: 0px;
	}
.velaro-available-launcher .velaro-custom-launcher-frame, .velaro-available-launcher .velaro-custom-launcher-frame iframe {
    bottom: 80px !important;
		}	
        .button_filter-close.panded { display: block !important; }
        h2.itemTitle {
            font-size: 1rem;
        }
        table.tabTable td { font-size: 0.7rem; padding: 0.2rem; }
        span.breadcrumb-separator { font-size: 1rem; }
        li.btn-right {
            display: list-item;
            color: #FFF;
            background-color: #162C9C;
            border-color: #162C9C; 
            padding: 0rem 0.75rem;
        }
        img.img_bags--mobile { display: block; }
        img.img_bags, .latestPosts { display: none; }
		
    }
    @media (max-width: 780px) {
        img.img_bags--mobile, .mainPageCategories a.img_bags--mobile, .banners a.img_bags--mobile, div.img_bags--mobile { display: none; }
        img.img_mini_bags--mobile{ display: block; }
		.defineContent .icons a { margin: 0px; margin-bottom: 40px; }
		#indexDefault .icons { border-bottom: 0px !important; padding-bottom: 0px !important; }
		#indexDefault .banners { display: none; }
		.latestPosts { padding-top: 0px !important; }
    }
    @media (max-width: 670px) {
        img.img_mini_bags--mobile{ display: none; }
        ul.dopnav.fixedbar {
            width: calc( 100% - 220px);
        }
        ul.dopnav {
            width: calc( 100% - 118px);
        }
        ul.dopnav li {
            width: 50%;
            text-align: center;
        }
        nav.navbar {
            background-color: #162C9C
        }
    }
    @media (max-width: 500px) {
        ul.dopnav li {
            font-size: 0.9rem;
        }
    }
    @media (max-width: 850px) {
        /*img.img_mini_bags--mobile{ width: 40%; height: auto !important; }*/
        .ajax-cart-content-header .dropdown-menu.show {
            position: fixed !important;
            transform: none !important;
            top: 0px !important;
            left: 0px!important;
            right: 0px;
            z-index: 100000;
            width: 100%;
            max-height: 500px !important;
            padding-bottom: 50px;
        }
        .cart .dropdown-menu .cart__close {
            right: 0;
            left: 0;
            top: auto;
            bottom: -0px;
            text-align: center;
            font-size: 18px;
        }
        .cart .dropdown-menu .cart__close span {
            display: inline-block;
            padding: 3px 5px;
            vertical-align: text-top;
        }
    }

    nav.navbar .navbar-toggler {color: #FFF;background-color: #162C9C;border-color: #162C9C;}
    nav.navbar .navbar-toggler:hover {color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_TEXT_COLOR_HOVER; ?>;background-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_COLOR_HOVER; ?>;border-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_BORDER_COLOR_HOVER; ?>;}
    code {
        color: #bf1e1e;
    }
    #footerWrapper a.nav-link {
        font-size: .9rem;
        color: #FFF;
        padding: 0.5rem 0rem 0.5rem 0rem;
    }
    h3.title-under, span.title-under {
        position: relative;
        font-size: 1.2rem;
        color: #FFF;
        margin-bottom: 1rem;
		margin-top: 1rem;
		display: block;
		font-weight: 500;
    	line-height: 1.2;		
    }
    .title-under:after {
        content: "";
        position: absolute;
        display: block;
        height: 5px;
        width: 68px;
        left: 0;
        bottom: -0.5em;
        background: #F9D933;
    }
    #footerWrapper ul.nav-pills li {
        display: block;
        width: 100%;
    }
    @media (max-width: 574px) {
        h3.title-under, #footerWrapper ul.nav-pills li, span.title-under {
            padding-left: 15px;
            padding-right: 15px; 
        }
        .title-under:after {
            left: 15px;
        }
        ul.social-links {
            display: table;
            margin-right: auto;
            margin-left: auto;
            margin-top: 30px;
        }
        #siteinfoLegal {
            text-align: center;
        }
        .footer-image-payment {
            float: unset !important;
            display: block;
            margin-left: auto;
            margin-right: auto !important;
        }
    }
    ul.social-links {
        padding-left: 0px;
	margin-top: 20px;
    }
    ul.social-links a {
        text-decoration: none;
        display: inline-block;
        color: #c4c4c4;
        text-align: center;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        -moz-transition: all .5s ease-out;
        -o-transition: all .5s ease-out;
        -webkit-transition: all .5s ease-out;
    }
    .social-links.social-links--large {
        list-style: outside none none;
    }
    .social-links.social-links--large .icon {
        width: 40px;
        height: 40px;
        line-height: 40px;
    }
    .social-links.social-links--large li {
        display: inline-block;
        width: 42px;
        height: 42px;
        line-height: 43px;
    	background: rgba(255,255,255,0.2);
	border-radius: 5px;
	margin-right: 13px;
        transition: 0.25s;
	border: 1px solid rgba(255, 255, 255, 0);
    }
    .social-links.social-links--large li:hover {
	transition: 0.25s;
	background: rgba(255,255,255,0) !important;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .social-links.social-links--large .icon {
        font-size: 27px;
    }
    /*.fa-facebook-f:before, .fa-facebook:before {
        content: "\f39e";
    } */
    a.fa-facebook {
	background: url(/images/icons-svg/soc_FB.svg) top center !important;
    }
    a.fa-twitter {
	background: url(/images/icons-svg/soc_TW.svg) top center !important;
    }
    a.fa-pinterest {
	background: url(/images/icons-svg/soc_PR.svg) top center !important;
    }
    a.fa-youtube {
	background: url(/images/icons-svg/soc_YT.svg) top center !important;
    }
    a.fa-instagram{
	background: url(/images/icons-svg/soc_IN.svg) top center !important;
    }
/*    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 'Font Awesome 5 Brands';
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }*/
    .table-models-sizes {
        font-size: 0.9rem;
    }
    .table-models-sizes-legend span {
        color: #fe6902;
        font-weight: bold;
    }
    .table-models-sizes caption {
        color: inherit;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        caption-side: top;
    }
    .table-models-sizes td, .table-models-sizes th {
        padding: 5px;
        text-align: center;
    }
    .table-models-sizes td, .table-models-sizes th, .table-models-sizes table {
        border: 1px solid black !important;
    }

    .table-models-sizes th {
        background-color: #fe6902;
    }
    .table-models-sizes td, .table-models-sizes th {
        padding: 5px;
        text-align: center;
    }
    .table-models-sizes td, .table-models-sizes th, .table-models-sizes table {
        border: 1px solid black !important;
    }
    .table-models-sizes-mobile-on {
        display: none;
    }
    .table-models-sizes table {
        width: 100%;
    }

    .collapse-block {
        padding: 14px 21px 14px 20px;
    }

    .collapse-block {
        width: 100%;
        border-bottom: 1px solid #e5e5e5;
        margin-bottom: 12px;
        padding-bottom: 14px;
	overflow: hidden;
    }
    .collapse-block__title {
        cursor: pointer;
        padding: 14px 20px 16px 12px;
        margin-top: 0!important;
        margin-bottom: 0!important;
        position: relative;
        font-size: 1.25em;
        margin: 0 0 15px;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
	text-transform: uppercase;
    }
   .leftblock__title {
        padding: 14px 20px 12px 10px;
        margin-top: 0!important;
        margin-bottom: 20px !important;
        position: relative;
        font-size: 1.25em;
        margin: 0 0 15px;
	color: #000;
	background-color: #FFF;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .collapse-block__title:after {
        position: absolute;
        display: none;
        top: 15px;
        right: -5px;
        font-family: 'Font Awesome 5 Free';
        font-size: 22px;
        content: "\f0fe";
        line-height: 1em;
    }

    .collapse-block__title:after {
        color: #fe6902;
    }
    .open>.collapse-block__title:after {
        content: "\f146";
    }
    .dopnav {
        flex-direction: row;
        margin-right: 0px;
    }
    .dopnav li {
        font-size: 1rem;
    }

    /*youtube */
    .youwrapper {
        max-width: 680px;
        margin: 10px auto;
        padding: 0 20px;
    }

    .youtube {
        background-color: #000;
        margin-bottom: 30px;
        position: relative;
        padding-top: 56.25%;
        overflow: hidden;
        cursor: pointer;
    }
    .youtube img {
        width: 100%;
        top: -16.82%;
        left: 0;
        opacity: 0.7;
    }
    .youtube .play-button {
        width: 90px;
        height: 60px;
        background-color: #333;
        box-shadow: 0 0 30px rgba( 0,0,0,0.6 );
        z-index: 1;
        opacity: 0.8;
        border-radius: 6px;
    }
    .youtube .play-button:before {
        content: "";
        border-style: solid;
        border-width: 15px 0 15px 26.0px;
        border-color: transparent transparent transparent #fff;
    }
    .youtube img,
    .youtube .play-button {
        cursor: pointer;
    }
    .youtube img,
    .youtube iframe,
    .youtube .play-button,
    .youtube .play-button:before {
        position: absolute;
    }
    .youtube .play-button,
    .youtube .play-button:before {
        top: 50%;
        left: 50%;
        transform: translate3d( -50%, -50%, 0 );
    }
    .youtube iframe {
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }
    /*end youtube */
    @media (max-width: 992px) {
        .collapse-block {
            margin-bottom: 0;
        }
        .dopnav.fixedbar {
            margin-right: 103px;
        }
    }
    @media (min-width: 768px){
	.table-models-sizes tbody tr:nth-child(odd) {
	    background-color: #FFE4E1;
	    border-top: 3px solid black !important;
	}
    }
    @media (max-width: 767px) {
        .table-models-sizes-mobile-on {
            display: block;
            margin-left: -22px;
            margin-right: -22px;
        }
        .table-models-sizes-mobile-off,  .collapse-block__content  {
            display: none;
        }
	#search-input1 {
	    display: none;
	}
	.productDescription table {
		width: 100% !important;
	}
	  .simple-little-table {
		font-size: 0.7rem;
	  }
	  .table td, .table th {
    	padding: .1rem;
		}
		#shoppingCartDefault-cartTableDisplay td, #shoppingCartDefault-cartTableDisplay th {
			font-size: .9rem;		
		}
		#shoppingCartDefault-cartTableDisplay td.d-sm-table-cell input[type="image"]  {
			width: 30px;
		}
		#shoppingCartDefault-cartTableDisplay td.d-sm-table-cell a.btn {
		    font-size: .8rem;
    		padding: .375rem .5rem;
		}
		#shoppingCartDefault-cartTableDisplay td button.btn {
			    font-size: .75rem;
		}
    }
    @media (min-width: 576px) {
        .card-deck .col {
            margin-right: -15px;
            margin-left: -15px;
        }
	.categoryListBoxContents.card { margin-left: 0px !important; margin-right: 0px !important; transition: 0.25s; }
    }

    .categoryListBoxContents.card {
        padding: 0px !important;
        background-repeat: no-repeat !important;
        min-height: 200px;
        background-size: contain !important;
    	margin-bottom: 40px !important;
    }
    .categoryListBoxContents.card:hover {
        transform: scale(1.1);
        background-color: #333;
    }
    .categoryListBoxContents.card a {
        font-weight: 600;
        min-height: 150px;
    }
    .categoryListBoxContents.card a span {
        position: absolute;
        bottom: -26px;
        left: 0px;
        right: 0;
        background-color: rgba(255,255,255, 0.85);
    }
    .card-body {
        padding: 0.8rem;
    }
    form[name=filter], #indexProductList-filterRow { display: none; }

    #ajax-cart-content.fixedbar {
        position: fixed;
        right: 100px;
        top: 5px;
        z-index: 10000;
    } 
	@media (max-width: 360px){
		#shoppingCartDefault-cartTableDisplay td, #shoppingCartDefault-cartTableDisplay th {
			font-size: .7rem;		
		}
	}		
    @media (min-width: 992px){
        .col-lg-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 74%;
        }
    }

    @media (max-width: 991px) {
	#categories { display: none; }
        div.dropdown-menu.show {
            margin-left: -15px;
        }
        ul.navbar-nav.mr-auto1 li {
            padding-left: 11px ;
        }
        ul.navbar-nav.ml-auto, ul.navbar-nav.mr-auto1 li.nmobile {
            display: none;
        }
        .dropdown-item {
            padding: 0.5rem 1.5rem;        
        }
        .navbar {
            padding: 0px;
            border: 0px;
        }
        #ajax-cart-content.fixedbar {
            position: fixed;
            right: 15px;
            top: -1px;
            z-index: 10000;  
            /*border-radius: 0.25rem;*/
            border: 1px solid #F9D933;    
            border-bottom-right-radius: 0.25rem!important;
        }
        #ajax-cart-content.dropdown.fixedbar>a { 
            background-color: #F9D933;
            height: 55px;
            width: 102px;
            border-radius: 0px;
            border: 0px solid #F9D933;
            border-bottom-right-radius: 0.25rem!important;
        }
        /*
          #ajax-cart-content.dropdown.fixedbar>a.dropdown-toggle::before {
            background-image: url(/images/fdt_cart_bl.svg);
            top: 6px;
            left: 8px;
            width: 40px;
            height: 34px;    
          }    
          #ajax-cart-content.dropdown.fixedbar>a span.badge--cart {
            color: #000;
            top: -3px;
            font-size: 14px;
            left: 9px;
          }
          #ajax-cart-content.fixedbar>a span.name-text {
            color: #000;
            bottom: 1px;
            right: 9px;
          }*/
        /*  .col-lg-9 {
            max-width: 74% !important;
          }*/
        ul.dopnav li { position: relative; }
        ul.dopnav li::before {
            content: "";
            position: absolute;
            left: 0px;
            top: 4px;
            height: 48px;
            width: 1px;
            background-color: #266FB6;
        }
        ul.dopnav li a {
            padding: 4px;
        }
        #ajax-cart-content.dropdown.fixedbar>a span.name-text {
            bottom: 12px;    
            font-size: 1.25rem;
        }
        #ajax-cart-content.dropdown.fixedbar>a span.badge--cart {
            display: none;
        }
        #ajax-cart-content.dropdown.fixedbar>a.dropdown-toggle::before {
            background-image: url('/images/mobile-icons/cart.svg');
            top: 3px;
            left: 0px;
            width: 40px;
            height: 48px;
        }  
        nav.navbar button.navbar-toggler i {
            display: none;
        }
        nav.navbar button.navbar-toggler img { 
            display: inline-block; 
            margin-left: 3px;
            margin-top: -5px;
            margin-right: 7px;
        }
    }
    .navbar:after {
        content: "";
        position: absolute;
        bottom: 0px;
        left: 0px;
        right: 0px;
        height: 10px;
        box-shadow: 0px 4px 5px 0 rgba(0,0,0,0.12);
/*        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 5px 0 rgb(0 0 0 / 12%);*/
	}
    a.list-group-item.list-group-item-action {
        border: 0px;	
        padding: 0.5rem 1rem 0.5rem 1rem;
		border-bottom: 1px solid #DFE2F1;
    }
    a.list-group-item.list-group-item-action::before {
        position: absolute;
        display: none;
        top: 13px;
        left: 5px;
        font-family: 'Font Awesome 5 Free';
        content: "\f111";
        font-size: .53em;
        line-height: 1em;
        color: #162C9C;
        font-weight: 700;
    }

    /* main page */
    .mostPopularProducts a {
        display: inline-block;
        width: 247px;
        height: 280px;
        text-transform: uppercase;
        text-align: center;
        text-decoration: none;
        color: #000;
        margin: 13px;
        vertical-align: top;
		transition: 0.2s;
    }
    .mostPopularProducts a:hover{
        color:#00aeff;
        transform:scale(1.1);
        transition:.5s;
    }
	.mostPopularProducts a:hover p,  .mostPopularProducts a:hover span {
		color: #0C76E8;
	}
    .mostPopularProducts a:last-child{
        margin-right:0;
    }
    .mostPopularProducts a img{
        width:200px;
        height:200px;
	display:block;
        margin:0 auto;
    }
    .mostPopularProducts a p{
        font-size:14px;
        font-weight:700;
        margin:10px 0;
    }
    .mostPopularProducts a span {
        display:block;
        font-size:22px;
    }
    .mostPopularProducts { text-align: center; }
    a.bestsellersButton {
        display: block;
        overflow: hidden;
        width: 240px;
        /*height: 37px;*/
        font-size: 1.2rem;
        text-align: center;
        font-weight: 500;
        text-decoration: none;
        color: #1c1c1c;
        line-height: 44px;
        background-color: #ff9900;
        margin: 25px auto 45px;
        border: 0px solid #ff9900;
		transition: 0.25s;
		text-transform: uppercase;
		border-radius: 4px;
    }    
	a.bestsellersButton:hover {
		background-color: #0C76E8;
		color: #FFF;
		transition: 0.25s;		
	}
    .mainPageCategories {
        max-width: 735px;
        margin: 10px auto 20px;
        text-align: center;
    }
    .mainPageCategories a {
        display: inline-block;
        margin: 2px;
        overflow: hidden;
        text-decoration: none;
		height: 259px;
		width: 235px;
    }
    .mainPageCategories a p {
        /*font-family: 'Roboto Condensed',sans-serif;*/
        text-align: center;
        text-decoration: none;
        color: #000;
        font-weight: 700;
        font-size: 16px;
        margin: 0;
        margin-bottom: 10px;
    }
    .mainPageCategories a img {
        max-width: 100%;
    }
    .mainPageCategories a:nth-child(3) {
        float: none;
        margin-right: 8px;
    }
    .welcome {
        max-width: 750px;
        margin: 0 auto;
        text-align: center;
        font-size: 20px;
        font-weight: 700;
        padding: 15px;
        box-sizing: border-box;
        color: #000;
    }    
    .banners, .icons {
        line-height: 22px;
        max-width: 100%;
        margin: 10px auto 0;
        height: auto;
        text-align: center;
    }
    .banners a {
        display: inline-block;
        margin: 2px;
    }
    .icons a:first-child, .banners a:first-child {
        margin-left: 0;
    }
    .icons a:last-child, .banners a:last-child {
        margin-right: 0;
    }
    .banners a img {
        max-width: 100%;
    }
    .icons a {
        display: inline-block;
        margin: 10px 25px 15px;
        width: 195px;
        height: 120px;
        text-align: center;
        text-decoration: none;
        vertical-align: top;
    }
    .icons a:first-child, .banners a:first-child {
        margin-left: 0;
    }
    .icons a:last-child, .banners a:last-child {
        margin-right: 0;
    }
    .icons a p {
        text-align: center;
        text-decoration: none;
        color: #000;
        font-weight: 500;
        font-size: 1rem;
    }    
    .latestPosts {
        max-width: 100%;
        height: auto;
        margin: 0 auto;
        box-sizing: border-box;
        padding-top: 15px;
        text-align: center;
        color: #000;
    }   
    .latestPosts a {
        display: inline-block;
        vertical-align: top;
        width: 220px;
        height: 240px;
        margin: 16px;
        text-decoration: none;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.8rem;
    }
    .latestPosts a:nth-child(2) {
        margin-left: 0;
    }
    .mostPopularBlock {
        max-width: 100%;
        margin: 0 auto 35px;
        text-align: center;
    }    
    .mostPopularBlock div a {
        display: inline-block;
        vertical-align: top;
        width: 25%;
        text-decoration: none;
        margin: 10px 20px 0;
    }
    .mostPopularBlock div.Dave a {
        margin-top: 20px;
    }

    .mostPopularBlock div a img {
        max-width: 100%;
    }
    .mostPopularBlock div a p {
        color: #000;
        font-size: 1rem;
        line-height: 17px;
    }
    .mostPopularBlock a:hover{
        color:#0C76E8;
        transform:scale(1.1);
        transition:.2s;
        /*font-weight: 500;*/
    }
	.mostPopularBlock a {
		transition:.2s;	
	}
    h4.ncenterBoxHeading {
        border-top: 2px dotted #ccc;
        border-bottom: 2px dotted #ccc;
        border-color: #162C9C;
        font-size: 1.9rem;
        text-shadow: 1px 1px 1px #333;
        color: #162C9C;
        font-weight: 400;
        line-height: 1.7rem;
        padding: 5px 0;
        margin-top: 1em;
        margin-bottom: 10px;
        background-color: #FFF; 
    }
    .mostPopularBlock h4 {
        max-width: 100%;
        /*        min-height: 50px;
                line-height: 50px;*/
        color: #fff;
        font-size: 15px;
    }    
    @media (max-width: 767px){
        .mainPageCategories a:nth-child(3) {
            float: none;
            margin-right: 0;
        }    
        .mostPopularBlock div a {
            width: 90%;
        }
        table.popularItemTable td, tbody.popularItemTable td { 
            width: 100% !important;
            display: block;
            margin-bottom: 25px;
            padding-left: 5%;
            padding-right: 5%;
        }
		#categories-leftBoxCard { display: none; }
    } 
    ul.home {
        list-style: none;
    }
    ul.home li {
        text-align: justify;
    }
    .centerBoxWrapperContents table td, table td {
        padding: 0;
    }

    .popularItemTable td {
        vertical-align: top;
    }
    .centerBoxContentsNew {
        vertical-align: top;
        text-align: center;
        padding: 0.8rem;
    }
    .product_title {
        color: #1A1A58;
        font-size: 1rem;
        margin-top: 10px;
        line-height: 18px;
        color: #000;
        font-weight: 400;
        text-decoration: none;
    }    
    .listingPrice, .price, p.centerBoxContentsBestSellers {
        color: #777;
        font-size: 1.2rem;
        font-weight: 700;
    }    
    .btn--ys span {
        position: relative;
        top: 0;
        left: 0;
    }    
    .btn--ys .icon {
        display: inline-block;
        padding: 0 3px 0 0;
        font-size: 1.486em;
        vertical-align: middle;
        line-height: 1.3rem;        
    }    
    .product_detail span.icon-shopping_basket:before {
        content: " ";
        /*font-family: 'Font Awesome 5 Free';*/
        font-weight: 900;
        font-style: normal;
        font-size: 1.3rem;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
 	   background: url(/images/icons-svg/icon-shopping_basket-min.svg);
	    height: 23px;
	    width: 23px;
	    display: block;
    }    
    table.description_home_page {
        margin-top: 30px; 
    }
    .box_image a {
        min-height: 143px;
        display: block;
    }
    .product_title a {
        min-height: 55px;
        display: block;
    }
    .h2, h2 {
        font-size: 1.8rem;
    }
    div.footer-line {
        display: block;
        height: 1px;
        width: 100%;
        background-color: #445ac9;
        margin: 0px 35px;
    }
    .card-header {
        padding: 0.5rem 0.75rem; 
		border-bottom: 0px;
    }
    label.attribsInput, label.attribsSelect {
        margin-bottom: 0px !important;
    }
    h4.optionName {
        border-bottom: 0px;
    }
    h2#productsPriceBottom-productPriceBottomPriceSecond {
        padding-left: 0.8rem;
		font-size: 1.7rem;
		margin-bottom: 15px;
    }    
p.click {
    color: #cc0100;
    text-align: center;
    margin-bottom: 0;
    font-family: Arial,Helvetica,sans-serif;
    font-size: .9em;
    font-weight: 700;
    margin-top: 0;
}
.our-new-picture, .our-new-pictures {
    font-family: 'Roboto Condensed',sans-serif;
    color: #030303;
    font-size: 18px;
    font-weight: 300;
    text-align: center;
    margin-bottom: 5px;
    margin-top: 2px;
}
.table-key-head {
    font-family: 'Roboto Condensed',sans-serif;
    font-size: 1.2em;
    font-weight: 500;
    color: #162C9C;
    text-shadow: 1px 1px #fff;
}
#categoryDescription ul, #indexProductListCatDescription ul, .product-info-outer .tab-content #description ul {
    padding-left: 30px;
    list-style: disc;
}

.redsize {
    color: #cc1f00 /*ff1f00*/;
    font-weight: 700;
}
.tab-pane {
    display: none;
    background-color: #fff;
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: #e5e5e5;
    border-top: 0;
    font-weight: 400;
}
#productInfo .tab-pane.active {
    display: block;
}
#productInfo .nav-tabs {
    border-bottom: 1px solid #ddd;
}
#productInfo .nav {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
}
#productInfo .nav-tabs {
    border-bottom: 1px solid #ddd;
}
#productInfo .nav-tabs>li {
    float: left;
    margin-bottom: -1px;
}
#productInfo .nav>li {
    position: relative;
    display: block;
}
#productInfo .nav-tabs>li.active>a, #productInfo .nav-tabs>li.active>a:focus, #productInfo .nav-tabs>li.active>a:hover {
    color: #555;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    cursor: default;
}
#productInfo .nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
#productInfo .nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.6875;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
}
#productInfo .fnt-small .nav-tabs>li>a {
    line-height: 16px;
}
.f-tab-subheader {
    font-size: 18px;
    font-weight: bold;
    color: #121212;
    background-color: #DFE2F1;
    text-transform: uppercase;
/*    margin: 15px 0;*/
    padding: 7px 15px;
   border-radius: 3px;
}
.f-product-description table, #shipping table, .f-product-description td, #shipping td, .f-product-description th, #shipping th {
    border: 1px solid black !important;
    border-collapse: collapse;
}
caption {
    padding-top: 8px;
    padding-bottom: 8px;
    color: #000;
    text-align: left;
    caption-side: top;
	font-weight: 400;
}
.f-product-description caption, #shipping caption {
    font-weight: bold;
}
.f-product-description td, #shipping td, .f-product-description th, #shipping th {
    padding: 5px 10px;
}
.f-product-description table, #shipping table, .f-product-description td, #shipping td, .f-product-description th, #shipping th {
    border: 1px solid black !important;
    border-collapse: collapse;
}
#shipping .shipping-table-sm {
    display: none;
}
@media (max-width: 767px)  {
  #productInfo .nav-tabs li {
    float: none!important;
    text-align: center;
    border-bottom: 1px solid #e5e5e5;
    width: 100%;
  }
  #shipping .shipping-table-sm {
    display: table;
  }
  #shipping .shipping-table-lg {
    display: none;
  }
  #productInfo .nav-tabs li a {
    border-color: transparent!important;
    border-radius: 0;
    font-weight: 700;
    color: #333;
    -webkit-transition: all .3s linear 0s;
    -moz-transition: all .3s linear 0s;
    -ms-transition: all .3s linear 0s;
    -o-transition: all .3s linear 0s;
    transition: all .3s linear 0s;
  }
  #productInfo .nav-tabs li.active a {
    color: #fff!important;
    border-color: transparent!important;
  }
  #productInfo .nav-tabs li.active a {
    background: #162C9C !important;
  } 
}

#categoriesContent a.list-group-item.list-group-item-action::before { display: none; }
.card--padding {
    padding: 25px 30px 30px 30px;
    margin-bottom: 25px;
}

.card {
    border: 1px solid #e5e5e5;
}
.table-models-sizes-legend {
    float: right;
}
.table-models-sizes-legend p {
    margin: 0;
}
table {
    margin-bottom: 22px;
}
.custom-suite-link {
    margin: 0 auto;
    margin-top: 10px;
    display: flex;
    max-width: 670px;
    border-radius: 10px;
    background: #f1f2f3;
    border: 1px solid #d9d9d9;
    text-decoration: none;
    color: #333;
    padding: 30px;
}

.custom-suite-image-wrapper {
    padding-right: 36px;
    display: flex;
    align-items: center;
    flex-shrink: 1;
}
.custom-suite-text-block {
    flex-shrink: 2;
    font-family: Arial;
    font-style: normal;
    padding-left: 36px;
    position: relative;
}
.custom-suite-text-block::before {
    display: inline-block;
    content: '';
    position: absolute;
    width: 2px;
    height: 180px;
    left: 0;
    top: 50%;
    transform: translate(0,-50%);
    background-color: #d9d9d9;
}
.simple-little-table, table.product-table {
	width: 100% !important;
}
h2.description-product-page span{
    font-size: 23px !important;
}
table.simple-little-table td {
    padding-right: 15px;
    border: 1px solid #e5e5e5;
}
.description-product-zagolovok {
    color: #4d4d4d;
    text-align: center;
    margin-bottom: 5px;
}
/* SLIMBOX */#lbOverlay {position: fixed;z-index: 99999;left: 0;top: 0;width: 100%;height: 100%;background-color: #000;cursor: pointer;}#lbCenter, #lbBottomContainer {position: absolute;z-index: 99999;overflow: hidden;background-color: #fff;}.lbLoading {background: #fff url(../images/zen_lightbox/loading.gif) no-repeat center;}#lbImage {position: absolute;left: 0;top: 0;border: 10px solid #fff;background-repeat: no-repeat;}#lbPrevLink, #lbNextLink {display: block;position: absolute;top: 0;width: 50%;outline: none;}#lbPrevLink {left: 0;}#lbPrevLink:hover {background: transparent url(../images/zen_lightbox/prevlabel.gif) no-repeat 0 0%;}#lbNextLink {right: 0;}#lbNextLink:hover {background: transparent url(../images/zen_lightbox/nextlabel.gif) no-repeat 100% 0%;}.nextNoHover {background: transparent url(../images/zen_lightbox/nextlabel.gif) no-repeat 100% 0%;}.prevNoHover {background: transparent url(../images/zen_lightbox/prevlabel.gif) no-repeat 0 0%; }#lbBottom {font-family: Verdana, Arial, Geneva, Helvetica, sans-serif;font-size: 10px;color: #666;line-height: 1.4em;text-align: left;border: 10px solid #fff;border-top-style: none;}#lbCloseLink {display: block;float: right;width: 66px;height: 22px;background: transparent url(../images/zen_lightbox/closelabel.gif) no-repeat center;margin: 5px 0;outline: none;}#lbCaption, #lbNumber {margin-right: 71px;}#lbCaption {font-weight: bold;}
@media (max-width: 468px){
  #lbPrevLink {background: transparent url(../images/zen_lightbox/prevlabel.gif) no-repeat 0 0%;}
  #lbNextLink {background: transparent url(../images/zen_lightbox/nextlabel.gif) no-repeat 100% 0%;}	
}	
	
.tableBorderProduct {
    border: 1px solid black;
    border-collapse: inherit;
}
.tableBorderProduct td, .tableBorderProduct th {
    border: 1px solid #e5e5e5;
}
table.tableBorderProduct td, table.tableBorderProduct td {
    padding: 0;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
	#instructions { display: none; }
	
#productInfo-productAdditionalImages div.card div.imglist {

    max-height: 400px;
    overflow-y: auto;
    overflow-x: hidden;	
    width: auto;		
}	
#productInfo-productAdditionalImages div.card div.imglist div.card a span.imgLink {
  position: absolute;
  top: 45%;
  left: 0;
  right: 0;
  background-color: rgba(255,255,255, 0.5);
}
#description a {
  display: block;
  margin-bottom: 20px;
}
/*
#productInfo-productAdditionalImages div.card div.imglist {
	display: none;
}*/
@media (max-width: 480px) {
  #productInfo-productAdditionalImages div.card div.imglist img {	
    max-width: 100%;
    height: auto !important;
    border: 0;
    max-height: 100px;
	  width: auto;
  }
}	
h1, .h1 {
	font-size: 2rem;
	}
	#dynamicfilter-leftBoxCard { height: 100%; }	
	#dynamicfilterContent {  background-color: #FFF; }
	
ul#productInfo-productDetailsList li.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem .75rem 0rem;
    background-color: #fff;
    border: 0px solid rgba(0,0,0,.125);
}
ul#productInfo-productDetailsList {
	margin-bottom: 0px !important;
	}
#productsPriceTop-card {
	display: none;
	}	
#productsPriceBottom-card {
    border: 2px solid #F9D933;	
	display: inline-block;
	background-color: #FFF;
	}
#productsPriceBottom-card-body {	
    padding: 0.5rem 1rem !important;	
	}	
#productsPriceBottom-productPriceBottomPrice {
	margin-bottom: 0px;
	font-size: 1.7rem;
	}
#productsPriceBottom-productPriceBottomPriceSecond {
	font-size: 1.7rem;	
	}
#attributes-card.card, #addToCart-card.card {
    background-color: #DFE2F1;	
	}	
#attributes-card-header, #addToCart-card-header {
    background-color: #162C9C;
	color: #FFF;
	font-size: 1.3rem;
	padding: 0.25rem 0.75rem;	
	line-height: 2rem;
	}
#addToCart-card-header { 
	font-weight: 500;
	}
#attributes-card-body h4.card-header {
	background-color: transparent;
	font-size: 1.3rem;
	margin-bottom: 5px;
	padding-left: 0px;
}
#productsNextPrevious div.d-none a 	{
    background-color: #FFF;
    color: #162C9C;
    border: 0px;	
	}
#productInfo-productCategoryIcon {
	display: none;
	}
.button_ask_a_question {
    color: #162C9C;
    background-color: #ffffff;
    border-color: #ffffff;	
	padding-left: 0px !important;
	margin-bottom: 16px;
	}
#productQuestions:hover, .button_ask_a_question:hover {
	color: #0C76E8;
    background-color: #ffffff;
    border-color: #ffffff;	
	text-decoration: underline;
	}	
#categories-leftBoxCard {
/*	border: 2px solid #DFE2F1;*/
	background-color: #FFF;
	}
.leftBoxCard h4 {
	font-size: 1.2rem;
	text-transform: uppercase;
	}
#categoriesContent {
	margin-top: 10px;
	}
#shoppingCartDefault-btn-toolbar a.btn.button_back  {
	height: 42px;
    margin-top: 5px;
}
#shoppingCartDefault-btn-toolbar a.btn.button_checkout {
	background-color: #006957;
    border-color: #006957;	
	height: 52px;
    padding: 3px 25px !important;
    line-height: 2.5rem;	
}
#opc-order-confirm button.btn.button_confirm_order {
	background-color: #006957;
    border-color: #006957;	
}	
.figure:hover img {
    opacity: .9;
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    backface-visibility: hidden;
    -webkit-transition: opacity .25s,-webkit-transform .25s;
    transition: opacity .25s,transform .25s
}	
.figure img {
  transition: transform 0.25s;
  border-radius: 4px;
}
#indexDefault-pageHeading {
	font-size: 1.8rem;
	margin-top: 1.5rem;
	margin-bottom: 1.6rem;
/*	text-transform: uppercase;	*/
	line-height: 130%;
	text-align: center;
	}
h2.card-header	{
	text-transform: uppercase;	
	font-size: 1.1rem;
	margin-top: 10px;
	margin-bottom: 20px;
}
.centerBoxHeading	{
	background-color: #DFE2F1;
	color: #1c1c1c;
	text-align: left;
}
a.product.btn:hover {
	background-color: #0C76E8;
	color: #FFF;
	transition: transform 0.25s;
}
#productInfo-productName {
	font-size: 2.1rem;
	margin-top: 0.5rem;
}
#cartAdd div input.form-control {
	height: calc(1.7em + .75rem + 2px);
}
	#cartAdd div div button, .input-group-append .btn, button.btn.button_in_cart  {
		color: #1c1c1c;
	}	
	#cartAdd div div button:hover {
		 color: #FFFFFF; }
	#checkoutComments h4, #checkoutOneBillto h4, #checkoutShippingMethod h4, #checkoutPaymentMethod h4, .checkoutOneCoupon h4, .table-responsive.card h4,
	.opc-block .card h4.card-header,
	#registerDefault div.card h4.card-header,
	#myAccount-card h4, #emailNotifications-card h4 {
		background-color: #162C9C;
		color: #ffffff;
	}	
	#checkoutOneBillto, #checkoutShippingMethod, #checkoutPaymentMethod, #checkoutComments, .table-responsive.card, .checkoutOneCoupon.card, div.opc-block .card, #registerDefault div.card,
	#myAccount-card , #emailNotifications-card	{
		border-color: #162C9C;
		background-color: #DFE2F1;
	}
	#myAccount-card li, #emailNotifications-card li{ background-color: #DFE2F1; }
	form#checkout_payment { margin-top: 20px; }
	#shoppingCartDefault-cartTableDisplay td { background-color: #DFE2F1; }
	#shoppingCartDefault-cartTableDisplay th { background-color: #162C9C; color: #ffffff; }
	#shoppingCartDefault-cartTableDisplay td, #shoppingCartDefault-cartTableDisplay th {
    border: 1px solid #ffffff;
}
	#shoppingCartDefault-cartTotalsDisplay, #cartTotal {
		font-size: 1.5rem;
	}
	#myAccount-list-group li a { min-width: 100%; }
	p.contact_timing {
    	vertical-align: middle;		
	}
	#logo {
		padding: 1.8rem 1rem!important;
	}
	@media (max-width: 375px) {
		#navMain.fixedbar nav button.navbar-toggler span { 
			display: none;
		}
		#navMain.fixedbar nav button.navbar-toggler {
			padding-left: 16px;
    	    padding-right: 0px;
		}
		ul.dopnav.fixedbar {
 		   width: calc( 100% - 165px);
		}
	}
.velaro-unavailable-launcher .velaro-custom-launcher-frame, .velaro-unavailable-launcher .velaro-custom-launcher-frame iframe {
    border-radius: 40px;
    right: 5px !important;
    bottom: 10px !important;
	
/*    right: 55px;
    bottom: 60px;*/
}	
	.velaro-custom-launcher {
		background-color: #F9D933 !important;
	}
	.velaro-custom-launcher span {
		color: rgb(34 34 34) !important;
	}
	#productsListing span.productBasePrice {
		border: 2px solid #F9D933;
    	padding: 3px 15px !important;
    	border-radius: 3px;
    	font-weight: 500;
		font-size: 1.25rem;
    	background-color: #F9D933;
		margin-top: 15px;
		margin-bottom: 10px;
	}	
	.home-box__heading {
		font-size: 1.1rem;
    	margin-top: 10px;
	    margin-bottom: 20px;
	    display: block;
	    width: 100%;
	    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
	    padding: 0.5rem 0.75rem;
	}
	#shippingEstimatorContent { display: none; }
	#indexDefault .welcome {
		border-top: 2px solid #DFE2F1;
		padding-top: 20px;
		padding-bottom: 20px;
	}
	#indexDefault .welcome span {
		font-size: 1.1rem;
		font-weight: 700;
		margin-bottom: 10px;
		display: block;
	}
	#indexDefault .welcome p {
		font-size: 1.1rem;
		font-weight: 500;	
	}
	#indexDefault .icons {
		border-bottom: 2px solid #DFE2F1;
		max-width: 735px;
		padding-bottom: 30px;
	}		
	#indexDefault .icons p {	
		margin-top: 25px;
	}		
	#indexDefault .icons img {
		transition: transform 0.25s;
	}
	#indexDefault .icons a:hover img {
    	opacity: .9;
    	-webkit-transform: scale(1.2);		
	    transform: scale(1.2);
	    backface-visibility: hidden;
	    -webkit-transition: opacity .25s,-webkit-transform .25s;
	    transition: opacity .25s,transform .25s;
	}
	#indexDefault .banners img {
		transition: opacity .25s, transform 0.25s;
	}
	#indexDefault .banners img:hover {
		opacity: .9;
/*    	-webkit-transform: scale(1.1);		
	    transform: scale(1.1);*/
	    backface-visibility: hidden;
	    -webkit-transition: opacity .25s,-webkit-transform .25s;
	    transition: opacity .25s,transform .25s;
	}
	.latestPosts a p { margin-top: 20px; }
	.latestPosts a { height: 235px !important;  } 
.so_btn_sold_out {
    width: 100%;
    background: #F5F5F5!important;
    color: #555!important;
    font-size: 20px!important;
	border-radius: 4px !important;
    padding: 0;
    line-height: 56px;
    height: 56px;
    letter-spacing: 1px;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
}	
	.so_btn_sold_out, .so_btn_check_out {
    	font-size: 1.4rem!important;
    	height: 40px;
    	line-height: 40px;
		font-weight: 700;
	}
	.btn_alternative {
   		width: 100%;
    	color: #333!important;
	    font-weight: 700;
	    font-size: 18px!important;
	    padding: 0;
	    line-height: 69px;
	    height: 69px;
	    letter-spacing: 1px;
	    display: inline-block;
	    text-align: center;
	    text-transform: uppercase;
	    white-space: nowrap;
	}
.so_btn_check_out {
    width: 100%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.12);
    border-radius: 4px !important;
    font-size: 17px!important;
    padding: 0;
    line-height: 69px;
    height: 69px;
    letter-spacing: 1px;
	display: block;
}	
#cartAdd .btn--ys {
    position: relative;
    padding: 10px 14px;
    font-size: .875em;
    line-height: 1.486em;
    height: 40px;
    color: #fff;
    border-radius: 0;
    vertical-align: top;
    border: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    -webkit-transition: all .3s 0s ease;
    -moz-transition: all .3s 0s ease;
    -ms-transition: all .3s 0s ease;
    -o-transition: all .3s 0s ease;
    transition: all .3s 0s ease;
}	
.products-bar, .products-bar-fixed, .product-info .btn--ys {
    background-color: #fe6902;
}	
.so_btn_check_out:before {
    content: '';
    display: block;
    position: absolute;
    top: -1px;
    left: 0;
    right: 0;
    width: 0;
    height: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-top: 10px solid #DFE2F1;
    border-radius: 2px;
    margin: auto;
}	
#cartAdd .btn--ys {
    background-color: #162C9C;
}	
#cartAdd .btn--ys:hover {
	color: #cccccc;
	text-decoration: none;
}
.tp-banner-container {
    width: 100%;
    position: relative;
    padding: 0;
    z-index: 1;
}
.tp-banner {
    font-size: 10px;
    z-index: 1;
    position: relative;
}
.slick-dots { display: none !important; } 
.content-sm, .content-md {
  margin-top: 20px;
  margin-bottom: 20px;
}
.product__inside__image img {
    width: 280px;
}
.product__inside__name h2 {
    -webkit-line-clamp: 3;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
/*    height: 6rem;*/
    font-size: 14px;
    font-weight: 500;
    line-height: 1.5em;
    text-transform: uppercase;
    padding: 0 10px;
    margin: 1.48em 0rem 1rem;
    letter-spacing: .6px;
    color: #D1112A;
    text-align: center;
}
.product__inside__price.price-box {
    margin: 0 0 .6em 0;
    font-size: 1.875em;
    line-height: 1em;
    color: #333;
    font-family: Arial,sans-serif;
    font-weight: 400;
    text-align: center;
}
.product-info__description.product__inside__info {
    padding: 0 30px 10px;
}
.product-info__description .product-model {
    -webkit-line-clamp: 2;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-size: 14px;
}
.product .product__inside__info .btn--xl:not(.row-mode-visible) {
    width: 100%;
    padding-right: 15px;
    height: 50px;
    line-height: 50px;
    padding: 0;
    margin: 0 2px 14px;
    text-align: center;
    overflow: hidden;
    display: inline-block!important;
    text-transform: uppercase;
    font-size: 1rem;
}

.product__inside__info__btns span.icon-shopping_basket:before {
    content: " ";
    /* font-family: 'Font Awesome 5 Free'; */
    font-weight: 900;
    font-style: normal;
    font-size: 1.3rem;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    background: url(/images/icons-svg/icon-shopping_basket-min.svg);
    height: 23px;
    width: 23px;
    display: block;
}
.product-info__sku {
    font-weight: 300;
    margin-top: -4px;
}
#products-extra-links { background: #FFF; }
.box-baners { display: flex; flex-wrap: wrap; margin-top: 20px;}
.box-baners a { flex: 1 1 260px; margin: 5px; }
.figure img { width: 100%; }

#mc_embed_signup .mc-field-group {
    clear: left;
    position: relative;
    width: 96%;
    padding-bottom: 3%;
    min-height: 50px;
}
#hideLinkText {
    text-decoration: underline;
}
b, strong {
    font-weight: 600;
}
.f-short-tab-content.f-short-tab-content-active {
    font-size: 15px;
    font-weight: 400;
    color: #333;
}
.f-short-tab-content.f-short-tab-content-active li::marker {
    unicode-bidi: isolate;
    font-variant-numeric: tabular-nums;
    text-transform: none;
    text-indent: 0px !important;
    text-align: start !important;
    text-align-last: start !important;
    font-size: 12px;
    font-weight: 300;
    color: #777;
}
.box-baners a {
  display: inline-block;
}
.f-tab-body.f-tab-body-active ul {
    padding-left: 30px;
    list-style: disc;
    color: #000;
    font-size: 1rem;
    font-weight: 400;
}
.f-tab-body.f-tab-body-active ul li::marker {
    unicode-bidi: isolate;
    font-variant-numeric: tabular-nums;
    text-transform: none;
    text-indent: 0px !important;
    text-align: start !important;
    text-align-last: start !important;
    font-size: 12px;
    font-weight: 300;
}
.modal {
    z-index: 10500 !important; 
}

.product__inside__image:hover img {
    opacity: .9;
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    backface-visibility: hidden;
    -webkit-transition: opacity .25s,-webkit-transform .25s;
    transition: opacity .25s,transform .25s
}	
.product__inside__image img {
  transition: transform 0.25s;
  border-radius: 4px;
}

#indexProductList-cat-wrap { display: none; }

#newCenterbox-card-body .centerBoxContentsNew:hover img,
.card-deck .card:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    backface-visibility: hidden;
    -webkit-transition: opacity .25s,-webkit-transform .25s;
    transition: opacity .25s,transform .25s
}
#newCenterbox-card-body .centerBoxContentsNew img,
.card-deck .card img {
  transition: transform 0.25s;
}

#ajax-cart-content.dropdown>a:hover {
  box-shadow: 0px 0px 20px 0px #F9D932;
  transition: transform 0.25s;
}
#ajax-cart-content>a {
  transition: transform 0.25s;
}
.swiper-button-next, .swiper-rtl .swiper-button-prev {
    right: -21px !important;
}
.swiper-button-prev, .swiper-rtl .swiper-button-next {
    left: -21px !important;
}
.swiper-button-prev, .swiper-rtl .swiper-button-next:before {
  content: url(/images/mobile-icons/l-arr-small-slider.svg);
}

.swiper-button-next, .swiper-rtl .swiper-button-prev:before {
  content: url(/images/mobile-icons/r-arr-small-slider.svg);
}
.centerBoxContentsListing:hover {background: linear-gradient(180deg, #FFF 0%, #DFE2F1 100%);}

.post__title_block figure {
  overflow: hidden;
}

.post__title_block figure img {
    width: 100%;
    height: auto;
    -webkit-transition: opacity .3s,-webkit-transform .3s;
    transition: opacity .3s,transform .3s;
    -webkit-transform: scale(1);
    transform: scale(1);
    backface-visibility: hidden;
}
.post__title_block figure:hover img{opacity:.9;-webkit-transform:scale(1.05);transform:scale(1.05);backface-visibility:hidden}
recent-post-box:hover .figcaption{background-color:#fff}
.recent-post-box:hover .figcaption:before{width:73px;height:73px;top:0;left:0;opacity:1}
.recent-post-box:hover .figure .figcaption b,
.recent-post-box:hover .figure .figcaption em {
  color: #162C9C;
}

.recent-post-box .figure {
    display: block;
    margin-bottom: 34px;
    overflow: hidden;
    position: relative;
}
.recent-post-box .figure .figcaption span {
    position: relative;
    display: block;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}
.recent-post-box .figure .figcaption.label-top-left {
    top: 21px;
    left: 21px;
}
.recent-post-box .figure .figcaption {
    display: block;
    position: absolute;
    width: 73px;
    height: 73px;
    text-align: center;
    color: #fff;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    line-height: 24px;
    -webkit-transition: all .3s linear 0s;
    -moz-transition: all .3s linear 0s;
    -ms-transition: all .3s linear 0s;
    -o-transition: all .3s linear 0s;
    transition: all .3s linear 0s;
    font-size: 16px;
}
.recent-post-box .figcaption:before {
    content: '';
    background: #fff;
    width: 0;
    height: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    float: left;
    border-radius: 50%;
    -webkit-transition: all .3s linear 0s;
    -moz-transition: all .3s linear 0s;
    -ms-transition: all .3s linear 0s;
    -o-transition: all .3s linear 0s;
    transition: all .3s linear 0s;
}
.recent-post-box .figure .figcaption b {
    font-weight: 500;
    display: block;
    text-align: center;
    font-size: 30px;
}
.recent-post-box .figure .figcaption em {
    font-family: Georgia,sans-serif;
    display: inline-block;
}
.recent-post-box .figure .figcaption {
    background-color: #162C9C;
}
.post__title_block {
	text-align: center;
	margin-bottom: 30px;
}
.buttonRow.back.btn.btn--ys {
	margin: 30px 0px;
}
#moreNewsDefault .post {
	text-align: justify;
}

.product__label {
    position: absolute;
    top: 1.5em;
    font-size: .8125em;
    line-height: 1.04em;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-family: Arial,sans-serif;
    font-weight: 600;
}
.product__label--right {
    right: 1.5em;
}

.product__label--new {
    background-color: #474747;
    padding: .7em .75em .6em;
}
.banner .figure {
    display: block;
    overflow: hidden;
}
.banner .figure img {
    width: 100%;
    height: auto;
    vertical-align: top;
    margin-top: 20px;
}
#product-area .product__inside__image, .centerBoxWrapper .pzen-item .product__inside__image, .centerBoxWrapper .product__inside__image {
    height: 190px!important;
}
#product-area .product__inside__carousel.slide, .centerBoxWrapper .pzen-item .product__inside__carousel, .centerBoxWrapper .product__inside__carousel.slide {
    height: 100%;
}
#product-area .product__inside__image img, .centerBoxWrapper .pzen-item .product__inside__image img, .centerBoxWrapper .product__inside__image img {
    max-height: 100%!important;
    max-width: 100%!important;
}
.product .product__inside__carousel .carousel-inner {
    height: 190px;
}
</style>