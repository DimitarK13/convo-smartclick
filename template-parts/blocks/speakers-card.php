<?php

$background_image = get_field('background_image');
$heading = get_field('heading');
$profession = get_field('profession');
$description = get_field('description');


echo '<div class="speakers-card card">';
	if(!empty($background_image))
		echo wp_get_attachment_image($background_image['ID'], 'full', null, array('class' => 'card-background-image'));
	if(!empty($heading))
		echo '<h3 class="card-heading">' . $heading . '</h3>';
	if(!empty($profession) && !empty($description))
		echo '<div class="card-flex"><p class="card-profession">' . $profession . '</p><p class="card-description">' . $description . '</p></div>';
echo '</div>';

?>