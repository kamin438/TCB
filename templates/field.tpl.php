<?php $max_delta = count($items) - 1; ?>

<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:</div>
  <?php endif; ?>
  
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item<?php print $delta % 2 ? ' odd' : ' even'; ?>
      <?php print $delta == 0 ? ' first' : ''; ?>
      <?php print $delta == $max_delta ? ' last' : ''; ?>"<?php print $item_attributes[$delta]; ?>>
      <?php print render($item); ?>
      </div>
    <?php endforeach; ?>
  </div>
  
</div>
