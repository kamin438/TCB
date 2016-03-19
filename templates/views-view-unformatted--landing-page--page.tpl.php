<?php
	$counter = 1;
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row">
<?php foreach ($rows as $id => $row): ?>
<?php if($counter == 4){ echo '</div><div class="row">'; } ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php $counter++; endforeach; ?>
</div>