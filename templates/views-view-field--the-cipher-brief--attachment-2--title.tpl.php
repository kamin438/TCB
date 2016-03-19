<?php 
	if(isset($row->field_field_headshot[0]['raw']['uri'])){
		$image = image_style_url('headshot', $row->field_field_headshot[0]['raw']['uri']);
	} else {
		$image = '';
	}
	$nid = 'node/'.$row->node_field_data_field_articles_nid;
	$alias = drupal_get_path_alias($nid);
	
	echo '<a class="expert-headshot" href="/'.$alias.'" style="background-image: url(\''.$image.'\');"><span></span></a>'; 
?>