<?php
/**
 * Override Modal for popup_image_additional
 * 
 * BOOTSTRAP v3.5.0
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */
?>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"><?php echo zen_output_string_protected($products_name); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo TEXT_MODAL_CLOSE; ?>">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="p-2"></div>
                <img class="showimage img-responsive" alt="" title="<?php echo zen_output_string_protected($products_name) ?>" src="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo TEXT_MODAL_CLOSE; ?></button>
            </div>
        </div>
    </div>
</div>
