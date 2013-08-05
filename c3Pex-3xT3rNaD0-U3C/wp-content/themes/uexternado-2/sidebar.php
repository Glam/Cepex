<div class="sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) :
        $widget_args = array(
            'after_widget' => '</div></div>',
            'before_title' => '<h3>',
            'after_title' => '</h3><div class="widget-body clear">'
        );
    ?>


    <?php the_widget( 'Recentposts_thumbnail', 'title=Noticias recientes', $widget_args); ?>

            
    <?php endif; ?>
    
    <div class="widget testimonio">
    <h3>Testimonio</h3>
        <div class="widget-body">
	        <?php $loop = new WP_Query( array( 'post_type' => 'testimonios', 'orderby' => 'rand', 'posts_per_page' => 1 ) ); ?>
	        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	        
	        <!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<?php the_post_thumbnail('mini-thumbnail'); ?>
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
	        <?php the_content() ?>
	        <p class="autor"><?php the_title() ?></p>
	        <?php endwhile; ?>
        </div>
    </div> 
    
    

       
    
</div>