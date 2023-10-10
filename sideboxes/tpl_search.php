<?php
/**
 * Side Box Template: Searchbox
 *
 * BOOTSTRAP v3.4.0
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */
// -----
// zc158 redefines the 'advanced_search_result' page as simply 'search_result.  If that
// new page's definition is present, the search result will be sent there for viewing;
// otherwise, it'll be sent to the legacy page.
//
$search_result_page = (defined('FILENAME_SEARCH_RESULT')) ? FILENAME_SEARCH_RESULT : FILENAME_ADVANCED_SEARCH_RESULT;
$search_page = (defined('FILENAME_SEARCH')) ? FILENAME_SEARCH : FILENAME_ADVANCED_SEARCH;

$content = '';
$content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent text-center p-3">';
$content .= zen_draw_form('quick_find', zen_href_link($search_result_page, '', $request_type, false), 'get');
$content .= zen_draw_hidden_field('main_page', $search_result_page);
$content .= zen_draw_hidden_field('search_in_description', '1') . zen_hide_session_id();

$content .= zen_draw_input_field('keyword', '', 'placeholder="' . SEARCH_DEFAULT_TEXT . '" aria-label="' . SEARCH_DEFAULT_TEXT . '"');
$content .= '<br>';

if (strtolower(IMAGE_USE_CSS_BUTTONS) == 'yes') {
    $content .= zen_image_submit(BUTTON_IMAGE_SEARCH, HEADER_SEARCH_BUTTON);
} else {
    $content .= '<input type="submit" value="' . HEADER_SEARCH_BUTTON . '" style="width: 55px" />';
}

$content .= '<br>';
$content .= '<a href="' . zen_href_link($search_page) . '">' . BOX_SEARCH_ADVANCED_SEARCH . '</a>';

$content .= '</form>';
$content .= '</div>';
