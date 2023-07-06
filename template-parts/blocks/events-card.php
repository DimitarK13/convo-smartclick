<?php

$background_image = get_field('background_image');
$heading = get_field('heading');
$date = get_field('date');
$learn_more = get_field('learn_more');


echo '<div class="events-card card">';
	if(!empty($background_image))
		echo wp_get_attachment_image($background_image['ID'], 'full', null, array('class' => 'card-background-image'));
	if(!empty($heading))
		echo '<h3 class="card-heading">' . $heading . '</h3>';
	if(!empty($date) && !empty($learn_more))
		echo '<div class="card-flex"><p class="card-date">' . $date . '</p><a href="#" class="card-learn-more">' . $learn_more . '</a></div>';
echo '</div>';

?>