<?php /* Template Name: Default Page*/ m("head"); ?>

             <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
              		<?php the_content(); ?>
               <?php endwhile; ?>
    		 <?php endif; ?>  

<?php m("foot"); ?>