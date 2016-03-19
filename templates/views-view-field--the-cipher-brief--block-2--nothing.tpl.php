<?php  
	if(isset($row->field_field_image[0]['rendered']['#item']['uri'])){
		$image = image_style_url('article_-_homepage_featured', $row->field_field_image[0]['rendered']['#item']['uri']);
	} else {
		$image = '';
	}
?>
<div class="featured-story image" style="background-image: url('<?php echo $image; ?>');">
	<?php echo $output; ?>
</div>