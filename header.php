<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Convo</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="https://dimitark.com">    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php 
    wp_head();
    ?>

</head> 

<body>
    
    <nav aria-label="Primary Navigation">	 
        <div class='wrapper'>   
            <a class="logo" href="/"><img src="wp-content/themes/customtheme/assets/images/logo.png" alt="">Convo</a>
            
            <button class="nav-toggle-btn" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="material-symbols-outlined">menu</span>
            </button>
            
                    
                    <?php 
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul class="nav-list" aria-expanded="false">%3$s</ul></ul>'
                                )
                            );
                        ?>
        </div>
    </nav>

    <main>
	    <header>
			<h1><?php the_title(); ?></h1>
		</header>