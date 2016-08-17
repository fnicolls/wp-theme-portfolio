<?php get_header(); ?>
<div class="wrapper">
<main id="content">

<?php if( have_posts() ){
		while( have_posts() ){
			the_post();
	 ?>

	<section id="page-<?php the_id(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</section>

<?php }//end while
 }//end if ?>
	
</main>


</div> <!-- wrapper -->

<?php 
	if (is_page('contact')) { 
		get_footer('contact');
	}else{ 
		get_footer(); 
	} ?>	