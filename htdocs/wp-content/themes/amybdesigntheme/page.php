<?php get_header(); ?>

<section>
				 <header>
				 <h2>
				 <?php the_title(); ?>
				 </h2>
				 </header>
				 
				 <?php while ( have_posts() ) : the_post() ?>
				 			 			
							 <article class="full">
							 					<?php the_content(); ?>										
							 </article>
				 
				 <?php endwhile; ?>
				 
				 
				 <div class="clear"></div>
</section>

<?php get_footer(); ?>
