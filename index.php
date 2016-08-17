<?php get_header(); ?>
<div class="wrapper">
<main id="content">
<div class="flex-cont"> 
<?php if( have_posts() ){
		while( have_posts() ){
			the_post();
	 ?>
	
	<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>">
		<div class="post-image">
			<?php 
				if( is_single() OR is_page() ){ ?>
					<div class="blog-feat-img-lg">
				<?php the_post_thumbnail('banner'); ?>
					</div>
			
			
			
				<?php 
				}else{ ?>
					<div class="blog-feat-img-sm">

				<?php the_post_thumbnail('blog-card');?>
				</div>
			
				<?php
				}

			?>
		</div>
		</a>

		<div class="post-content">
			<?php 
			if( is_single() OR is_page() ){ ?>
				<h2 class="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
				</h2>

			<?php	the_content();
			}else{ ?>
				<h2 class="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
				</h2>

			<?php	
				the_excerpt();
			}

			?>
		</div>
		<div class="spacer"></div>
		<div class="post-meta post-meta-archive">
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
			<span class="category">Category: <?php the_category(', '); ?></span>
		</div>
	</article>
	

	<?php }//end while

		//todo: add pagination
		}else{ ?>
			<h2>Sorry, no post to show.</h2>
  <?php } ?>

	</div> <!-- flex-container -->
	<?php   fern_pagination(); ?>
</main>

</div> <!-- wrapper -->

<?php get_footer(); ?>