<?php $counter = 1; ?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php 
	$counter++; 
  if($counter == 3){ echo '</div><div class="grid-row">'; } 
	endforeach; 
?>
