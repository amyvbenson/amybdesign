<?php include(TEMPLATEPATH . '/header_snippets.php'); ?>

<section>
				
				 <?php while ( have_posts() ) : the_post() ?>
	
				 			
							 <article class="full">
							 <header>
							 				  <h1><?php the_title(); ?></h1>
							 </header>
							 					
							 					
								<?php the_content(); ?>			
								
								<?php edit_post_link('edit', '<p>', '</p>'); ?>
															
							 </article>
				 
				 <?php endwhile; ?>
				 
				 
				 <div class="clear"></div>
</section>

<?php get_footer(); ?>
