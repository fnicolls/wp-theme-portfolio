<?php get_header(); ?>
<div class="wrapper">
<main id="content">



	<h2 class="port-work-title">
		<?php 
		$termtxt = strip_tags( get_the_term_list( get_the_id(), 'work') );
		echo $termtxt;
		?>
	</h2>
	<div class="flex-cont-port"> 
	 <?php
			if( have_posts() ) {
			  while (have_posts()) : the_post(); ?>
			  	<article id="port-<?php the_id(); ?>" <?php post_class(); ?>>
			  		<a href="<?php the_permalink() ?>">
						<div class="port-thumb">
						<?php the_post_thumbnail('port-thumbs'); ?>
						</div>
					</a>
				</article>
	<?php endwhile;
			} ?>
				
			 
	</div> <!-- flex-container 1-->

	
</main>


</div> <!-- wrapper -->

<?php get_footer(); ?>