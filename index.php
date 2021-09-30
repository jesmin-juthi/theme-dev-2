<!DOCTYPE >
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="container">
		<div id="header">
        	<h1><?php bloginfo('title'); ?></h1>
            <h2><?php bloginfo('description') ?></h2>
        </div>   
        
        <div id="menu">
        	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </div>
        
        <div id="leftmenu">

            <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3>Links</h3>
                        
                    <?php wp_nav_menu(array('theme_location' => 'sidebarMenu')); ?>

                </div>
                
                
             <div id="leftmenu_bottom"></div>

        </div>

        
		<div id="content">
        
        
            <div id="content_top"></div>
            
            <div id="content_main">
        	
            <?php while(have_posts()) : the_post(); ?>

                <?php the_post_thumbnail(); ?>

                <h2><?php the_title(); ?></h2>

                <br><br>

                <p><?php the_content(); ?></p>



            <?php endwhile; ?>


        </div>
        <div id="content_bottom"></div>
            
            <div id="footer"><h3><a href="http://www.bryantsmith.com">jesmin juthi</a></h3></div>
      </div>
   </div>

   <?php wp_footer(); ?>
</body>
</html>
