<?php get_header(); ?>

<section>
				 <header>
				 <h2>
				 <?php the_title(); ?>
				 </h2>
				 </header>
				 
				 <?php while ( have_posts() ) : the_post() ?>
				 			 			
							 <article>
							 					<?php the_content(); ?>		
												
												<?php edit_post_link('edit', '<p>', '</p>'); ?>								
							 </article>
							 
							 <?php $category_link = get_category_link(13); ?>							
							 <a href="<?php echo $category_link; ?>" title="Category Name">Snippets</a>
				 
				 <?php endwhile; ?>
				 
				 
				 <div class="clear"></div>
</section>

<?php get_footer(); ?>
