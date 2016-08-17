<?php get_header('home'); ?>
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
	
	<section class="home-widgs">
		<a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>" class="hw-link">
		<div class="home-widg">
			<h3 class="home-widg-h3">browse my portfolio</h3>
		</div>
		</a>

		<a href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>" class="hw-link">
		<div class="home-widg">
			<h3 class="home-widg-h3">peruse my resume</h3>
		</div>
		</a>

		<a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>" class="hw-link">
		<div class="home-widg">
			<h3 class="home-widg-h3">contact me</h3>
		</div>
		</a>
	</section>

</main>
	<div class="push"></div>
</div> <!-- wrapper -->



<?php get_footer('contact'); ?>