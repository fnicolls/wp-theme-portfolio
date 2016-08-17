<?php get_header('home'); ?>
<div class="wrapper">
<main id="content">
<div class="dude">
</div>
<?php if( have_posts() ){
		while( have_posts() ){
			the_post();
	 ?>

	<section id="page-<?php the_id(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</section>

<?php }//end while
 }//end if ?>
	
	<section class="home-widg-flex">
		<div class="home-widg">
			<a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>"><div class="hw-img img-1"></div></a>
			<h3 class="home-widg-h3">browse my 
			<a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>" class="hw-link">portfolio</a></h3>
		</div>

		<div class="home-widg">
			<a href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>"><div class="hw-img img-2"></div></a>
			<h3 class="home-widg-h3">peruse my 
			<a href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>" class="hw-link">resume</a></h3>
		</div>

		<div class="home-widg">
			<a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"><div class="hw-img img-3"></div></a>
			<h3 class="home-widg-h3">reach out &amp;
			<a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>" class="hw-link">contact me</a></h3>
		</div>
	</section>

</main>
	
</div> <!-- wrapper -->



<?php get_footer(); ?>