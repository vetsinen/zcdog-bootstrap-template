<div class="muzzles-sizing-warning">
    <?= TEXT_PRODUCTS_MODELS_SIZES_IMPORTANT_MESSAGE; ?>
</div>
<div style="margin: 5px auto; width: 80%; border: 3px solid #f00; text-align: center; font-size: 20px;">
	<a href="how-to-measure-your-dogclick-here-ezp-239.html" target="_blank" style="text-decoration: underline; color: #00f;"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_LINK_TITLE; ?></a>
</div>
<div class="table-models-sizes table-models-sizes-mobile-off">
    <div class="table-models-sizes-legend">
        <?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_LEGEND; ?>
    </div>
    <table>
        <caption><?php echo TEXT_PRODUCTS_MODELS_SIZES_TABLE_CAPTION; ?></caption>
        <thead>
            <tr>
                <th style="width:300px"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_BREED; ?></th>
                <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_LENGTH; ?> <span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_CIRCUMFERENCE; ?> <span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_EYE_LINE; ?> <span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_NECK_CIRCUMFERENCE; ?> <span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
				<th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_WIDTH; ?> <span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
				<th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_HEIGHT; ?> <span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
            </tr>
        </thead>
        <tbody>
            <?php while (!$models_sizes_table->EOF) { ?>
            <tr>
                <td rowspan="2">
                    <?php echo $models_sizes_table->fields['sizes_marking'] . ($models_sizes_table->fields['sizes_breeds'] ? ' - ' . $models_sizes_table->fields['sizes_breeds'] : ''); ?>
                </td>
                <td>
                    <?php echo !is_null($models_sizes_table->fields['sizes_length']) && strpos($models_sizes_table->fields['sizes_length'], '(') ? substr($models_sizes_table->fields['sizes_length'], 0, strpos($models_sizes_table->fields['sizes_length'], '(') - 1) : $models_sizes_table->fields['sizes_length']; ?>
                </td>
                <td>
                    <?php echo !is_null($models_sizes_table->fields['sizes_circumference']) && strpos($models_sizes_table->fields['sizes_circumference'], '(') ? substr($models_sizes_table->fields['sizes_circumference'], 0, strpos($models_sizes_table->fields['sizes_circumference'], '(') - 1) : $models_sizes_table->fields['sizes_circumference']; ?>
                </td>
                <td>
                    <?php echo !is_null($models_sizes_table->fields['sizes_eye_line']) && strpos($models_sizes_table->fields['sizes_eye_line'], '(') ? substr($models_sizes_table->fields['sizes_eye_line'], 0, strpos($models_sizes_table->fields['sizes_eye_line'], '(') - 1) : $models_sizes_table->fields['sizes_eye_line']; ?> 
                </td>
                <td>
					<?php echo !is_null($models_sizes_table->fields['sizes_neck_circumference']) && strpos($models_sizes_table->fields['sizes_neck_circumference'], '(') ? substr($models_sizes_table->fields['sizes_neck_circumference'], 0, strpos($models_sizes_table->fields['sizes_neck_circumference'], '(') - 1) : $models_sizes_table->fields['sizes_neck_circumference']; ?>
				</td>
				<td>
					<?php echo isset($models_sizes_table->fields['sizes_width']) && strpos($models_sizes_table->fields['sizes_width'], '(') ? substr($models_sizes_table->fields['sizes_width'], 0, strpos($models_sizes_table->fields['sizes_width'], '(') - 1) : $models_sizes_table->fields['sizes_width']; ?>
				</td>
				<td>
					<?php echo isset($models_sizes_table->fields['sizes_height']) && strpos($models_sizes_table->fields['sizes_height'], '(') ? substr($models_sizes_table->fields['sizes_height'], 0, strpos($models_sizes_table->fields['sizes_height'], '(') - 1) : $models_sizes_table->fields['sizes_height']; ?>
				</td>
            </tr>
            <tr>
                <td>
                    <?php echo !is_null($models_sizes_table->fields['sizes_length']) && strpos($models_sizes_table->fields['sizes_length'], '(') ? substr($models_sizes_table->fields['sizes_length'], strpos($models_sizes_table->fields['sizes_length'], '(') + 1, -1) : $models_sizes_table->fields['sizes_length']; ?>
                </td>
                <td>
                    <?php echo !is_null($models_sizes_table->fields['sizes_circumference']) && strpos($models_sizes_table->fields['sizes_circumference'], '(') ? substr($models_sizes_table->fields['sizes_circumference'], strpos($models_sizes_table->fields['sizes_circumference'], '(') + 1, -1) : $models_sizes_table->fields['sizes_circumference']; ?>
                </td>
                <td>
                    <?php echo !is_null($models_sizes_table->fields['sizes_eye_line']) && strpos($models_sizes_table->fields['sizes_eye_line'], '(') ? substr($models_sizes_table->fields['sizes_eye_line'], strpos($models_sizes_table->fields['sizes_eye_line'], '(') + 1, -1) : $models_sizes_table->fields['sizes_eye_line']; ?>
                </td>
                <td>
                    <?php echo !is_null($models_sizes_table->fields['sizes_neck_circumference']) && strpos($models_sizes_table->fields['sizes_neck_circumference'], '(') ? substr($models_sizes_table->fields['sizes_neck_circumference'], strpos($models_sizes_table->fields['sizes_neck_circumference'], '(') + 1, -1) : $models_sizes_table->fields['sizes_neck_circumference']; ?>
                </td>
				<td>
                    <?php echo isset($models_sizes_table->fields['sizes_width']) && strpos($models_sizes_table->fields['sizes_width'], '(') ? substr($models_sizes_table->fields['sizes_width'], strpos($models_sizes_table->fields['sizes_width'], '(') + 1, -1) : $models_sizes_table->fields['sizes_width']; ?>
                </td>
				<td>
                    <?php echo isset($models_sizes_table->fields['sizes_height']) && strpos($models_sizes_table->fields['sizes_height'], '(') ? substr($models_sizes_table->fields['sizes_height'], strpos($models_sizes_table->fields['sizes_height'], '(') + 1, -1) : $models_sizes_table->fields['sizes_height']; ?>
                </td>
            </tr>
            <?php 
                $models_sizes_table->MoveNext();
            } 
            ?>
        </tbody>
    </table>
</div>
<?php $models_sizes_table->Move(0); ?>
<div class="table-models-sizes table-models-sizes-mobile-on">
    <h2 class="text-center"><?php echo TEXT_PRODUCTS_MODELS_SIZES_TABLE_CAPTION; ?></h2>
    <p class="text-center"><?php echo TEXT_PRODUCTS_MODELS_SIZES_TABLE_HINT; ?></p>
    <?php while (!$models_sizes_table->EOF) { ?>
    <div class="collapse-block">
        <div class="collapse-block__title">
            <?php echo $models_sizes_table->fields['sizes_marking'] . ($models_sizes_table->fields['sizes_breeds'] ? ' - ' . $models_sizes_table->fields['sizes_breeds'] : ''); ?>
        </div>
        <div class="collapse-block__content">
            <table>
                <tr>
                    <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_LENGTH; ?><span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                </tr>
                <tr>
                    <td><?php echo $models_sizes_table->fields['sizes_length']; ?></td>
                </tr>
                <tr>
                    <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_CIRCUMFERENCE; ?><span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                </tr>
                <tr>
                    <td><?php echo $models_sizes_table->fields['sizes_circumference']; ?></td>
                </tr>
                <tr>
                    <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_EYE_LINE; ?><span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                </tr>
                <tr>
                    <td><?php echo $models_sizes_table->fields['sizes_eye_line']; ?></td>
                </tr>
                <tr>
                    <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_NECK_CIRCUMFERENCE; ?><span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                </tr>
                <tr>
                    <td><?php echo $models_sizes_table->fields['sizes_neck_circumference']; ?></td>
                </tr>
				<tr>
                    <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_WIDTH; ?><span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?></span></th>
                </tr>
                <tr>
                    <td><?php if(isset($models_sizes_table->fields['sizes_width'])) echo $models_sizes_table->fields['sizes_width']; ?></td>
                </tr>
				<tr>
                    <th><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_HEADER_HEIGHT; ?><span class="table-models-sizes-unit"><?= TEXT_PRODUCTS_MODELS_SIZES_TABLE_UNITS;?>)</span></th>
                </tr>
                <tr>
                    <td><?php if(isset($models_sizes_table->fields['sizes_height'])) echo $models_sizes_table->fields['sizes_height']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <?php 
        $models_sizes_table->MoveNext();
    }
    ?>
</div>