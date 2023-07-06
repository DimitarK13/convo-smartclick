<?php
get_header();
?>
    

		<section class="wrapper">
            <?php
               if ( have_posts() ) {
                    the_content();
               }
            ?>
	    </section>

    
<?php
get_footer();
?>