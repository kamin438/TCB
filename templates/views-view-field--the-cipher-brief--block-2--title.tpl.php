<?php  
	if(isset($row->field_field_image[0]['rendered']['#item']['uri'])){
		$image = image_style_url('homepage_-_featured_image', $row->field_field_image[0]['rendered']['#item']['uri']);
	} else {
		$image = '';
	}
	$nid = 'node/'.$row->node_field_data_field_expert_commentary_nid;
	$alias = drupal_get_path_alias($nid);
?>
<div class="featured-story image" style="background-image: url('<?php echo $image; ?>');"></div>