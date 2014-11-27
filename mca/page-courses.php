<?php /* Template Name: Courses*/ m("head"); ?>

<section id="inner-page">
    <div class="wrap row">
             <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
              		<?php the_content(); ?>
               <?php endwhile; ?>
    		 <?php endif; ?>  
    </div>
</section>
<?php m("foot"); ?>