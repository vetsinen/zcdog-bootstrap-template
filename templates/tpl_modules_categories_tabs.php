<?php
/**
 * Module Template - categories_tabs
 * 
 * BOOTSTRAP v1.0.BETA
 *
 * Template stub used to display categories-tabs output
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_categories_tabs.php 3395 2006-04-08 21:13:00Z ajeh $
 */

  include(DIR_WS_MODULES . zen_get_module_directory(FILENAME_CATEGORIES_TABS));
?>
<?php if (CATEGORIES_TABS_STATUS == '1' && sizeof($links_list) >= 1) { ?>
<!--<div id="categoriesTabs" class="d-none d-lg-block">
<nav class="nav nav-pills nav-fill" id="navCatTabs">//-->
<ul class="dropdown-menu">
<?php for ($i=0, $n=sizeof($links_list); $i<$n; $i++) { ?>
  <?php echo '<li class="nav-item">'.$links_list[$i].'</li>';?>
<?php } ?>
<!--</nav>
</div>//-->
</ul>
<?php } ?>
<style>
	
 #categories.dropdown:hover .dropdown-menu {display: block;}
#ezpagesBarHeader .dropdown-menu:hover {display: block;}

element.style {
}
 #categories.dropdown .dropdown-menu {
  top: 90% !important;
  max-height: 550px;
  overflow-y: scroll;
  overflow-x: hidden;
}
 #categories ul li a {
    display: block;
    width: 100%;
    padding: 0.15rem 0.5rem;
    clear: both;
    font-weight: 400;
    color: #212529 !important;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    margin: 0px !important;
    border-bottom: 1px solid #eee;
}
 #categories ul li a.nav-2 {
   padding-left: 20px;
}
</style>