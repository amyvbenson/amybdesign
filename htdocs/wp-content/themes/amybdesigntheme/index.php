<?php get_header(); ?>

<section>
				 <header>
				 <h2>
				 Portfolio
				 </h2>
				 </header>
				 
				 <?php
				 if ( is_home() ) {
				 		query_posts( 'cat=12' );
						}
				?>
				 
				 <?php while ( have_posts() ) : the_post() ?>
				 <?php   $customField = get_post_custom_values("URL"); ?> 
				 			
							 <article>
							 					<a href="<?php echo $customField[0]; ?>">
							 					<?php the_post_thumbnail(); ?> 
												</a>
							 					<?php the_content(); ?>										
							 </article>
				 
				 <?php endwhile; ?>
				 
				 
				 <div class="clear"></div>
</section>

<?php get_footer(); ?>
