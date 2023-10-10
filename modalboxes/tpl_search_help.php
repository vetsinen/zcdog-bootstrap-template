<?php
/**
 * Override Modal for popup_search_help
 * 
 * BOOTSTRAP v3.0.0
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */
?>

<!-- Modal -->
<div class="modal fade" id="searchHelpModal" tabindex="-1" role="dialog" aria-labelledby="searchHelpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchHelpModalLabel"><?php echo TEXT_SEARCH_HELP_LINK; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo TEXT_MODAL_CLOSE; ?>">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div><?php echo TEXT_SEARCH_HELP ?></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo TEXT_MODAL_CLOSE; ?></button>
      </div>
    </div>
  </div>
</div>
