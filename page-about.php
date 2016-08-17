<?php get_header(); ?>
<div class="wrapper">
<main id="content">

<?php if( have_posts() ){
		while( have_posts() ){
			the_post();
	 ?>

	<section id="page-<?php the_id(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'section', 'about' ); ?>
	</section>

<?php }//end while
 }//end if ?>
	
</main>


</div> <!-- wrapper -->

<?php get_footer(); ?>	