<?php get_header(); ?>
<div class="wrapper">
<main id="content" class="single">
<?php if( have_posts() ){
		while( have_posts() ){
			the_post();
	 ?>
	<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>

		<div class="post-image">
			<?php 
			if( is_single() OR is_page() ){ ?>
				<div class="blog-feat-img-lg">
			<?php the_post_thumbnail('banner'); ?>
				</div>

		</div>
		
		<div class="post-content">
			
			<h2 class="post-title-s">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			
				<?php the_content();
				}else{
					the_post_thumbnail('blog-card');
					the_excerpt();
				}

			?>
		</div>
		<div class="spacer"></div>
		<div class="post-meta">
			<?php 
				$archive_year  = get_the_time('Y'); 
				$archive_month = get_the_time('m'); 
				$archive_day   = get_the_time('d'); 
			?>
			<span class="date">
				<a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>">
						<?php echo get_the_date(); ?>
				</a>
			</span>
			<?php 
			$link = get_post_meta( get_the_id(), 'ex_link', true ); 
			$l_title = get_post_meta( get_the_id(), 'link_title', true ); 
			if($link){
			?>
			<span class="ex-link">via: <a href="<?php echo $link ?>" target="_blank"><?php echo $l_title ?></a></span>
			<?php } ?>
			
			<span class="tags"><?php the_tags(); ?></span>
			<span class="category">Category: <?php the_category(', '); ?></span>
		</div>
	</article>

	<?php }//end while

		  

		//todo: add pagination
		}else{ ?>
			<h2>Sorry, no post to show.</h2>
  <?php } ?>
	<div class="blog-widgets">
  <?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</div>
  <?php fern_pagination_thumbs(); ?>

	<div class="footspace"></div>
</main>
</div>

<?php get_footer(); ?>