<?php  
	$nid = 'node/'.$row->node_field_data_field_expert_commentary_nid;
	$alias = drupal_get_path_alias($nid);
	if(isset($row->field_field_image[0]['rendered']['#item']['uri'])){
		$image = $row->field_field_image[0]['rendered']['#item']['uri'];
		$imageUrl = image_style_url('homepage_-_featured_image', $image);
	} else {
		$imageUrl = '';
	}
?>
<a href="<?php echo $alias; ?>" class="featured-story intro">
	<img class="featured-story mobile-image" src="<?php echo $imageUrl; ?>" />
	<h2><?php echo $row->node_field_data_field_expert_commentary_title; ?></h2>
	<!--<p><?php //echo $row->field_body[0]['rendered']['#markup']; ?></p>-->
</a>