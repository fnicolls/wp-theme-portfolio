<?php get_header(); ?>
<div class="wrapper">
<main id="content" class="single">
<?php if( have_posts() ){
		while( have_posts() ){
			the_post();
	 ?>
	<article id="port-<?php the_id(); ?>" <?php post_class(); ?>>

	<div class="port-content-box">
		<div class="port-content">
			
			<h2 class="port-title-s">
				<?php the_title(); ?>
			</h2>
			<h3 class="port-sub-title">
				<?php echo get_post_meta( get_the_id(), 'sub_title', true ) ?>
			</h3>

			<p> <?php the_content(); ?> </p>

			<?php $theme = get_post_meta( get_the_id(), 'theme', true ); 
			if($theme){ ?>
			<p class="p-theme">Theme: "<?php echo $theme; ?>"</p>
			<?php } ?>

		</div>

		<div class="spacer"></div>

		<div class="meta">
			<?php $link = get_post_meta( get_the_id(), 'ex_link', true ); 
			if($link){
			?>
			<span class="ex-link"><a href="<?php echo $link; ?>" target="_blank">View Site Live</a></span>
			<?php } ?>

			<h3 class="meta-label">COLORS</h3>
			<div class="port-meta">

				<!-- color 1 -->
				<?php $p_color_1 = get_post_meta( get_the_id(), 'color_1', true ); 
				if($p_color_1){
				?>
				<div class="p-colors" style="background-color: <?php echo $p_color_1 ?>" title="<?php echo $p_color_1 ?>"></div>
				<?php } ?>

				<!-- color 2 -->
				<?php $p_color_2 = get_post_meta( get_the_id(), 'color_2', true ); 
				if($p_color_2){
				?>
				<div class="p-colors" style="background-color: <?php echo $p_color_2 ?>" title="<?php echo $p_color_2 ?>"></div>
				<?php } ?>

				<!-- color 3 -->
				<?php $p_color_3 = get_post_meta( get_the_id(), 'color_3', true ); 
				if($p_color_3){
				?>
				<div class="p-colors" style="background-color: <?php echo $p_color_3 ?>" title="<?php echo $p_color_3 ?>"></div>
				<?php } ?>
			</div>

			<div class="port-meta">
				<!-- color 4 -->
				<?php $p_color_4 = get_post_meta( get_the_id(), 'color_4', true ); 
				if($p_color_4){
				?>
				<div class="p-colors" style="background-color: <?php echo $p_color_4 ?>" title="<?php echo $p_color_4 ?>"></div>
				<?php } ?>

				<!-- color 5 -->
				<?php $p_color_5 = get_post_meta( get_the_id(), 'color_5', true ); 
				if($p_color_5){
				?>
				<div class="p-colors" style="background-color: <?php echo $p_color_5 ?>" title="<?php echo $p_color_5 ?>"></div>
				<?php } ?>

				<!-- color 6 -->
				<?php $p_color_6 = get_post_meta( get_the_id(), 'color_6', true ); 
				if($p_color_6){
				?>
				<div class="p-colors" style="background-color: <?php echo $p_color_6 ?>" title="<?php echo $p_color_6 ?>"></div>
				<?php } ?>
			</div>

			<h3 class="meta-label">PROGRAMS</h3>
			<div class="port-meta">
					<!-- programs -->
				<?php
					$programs = get_post_meta( get_the_id(), 'programs', true );

					if( count($programs) == 1 ){
				?>
					<div class="prog <?php echo $programs[0]; ?>"></div>
				<?php } 
					if( count($programs) == 2 ){
				?>
					<div class="prog <?php echo $programs[0]; ?>"></div>
					<div class="prog <?php echo $programs[1]; ?>"></div>
				<?php } 
					if( count($programs) == 3 ){
				?>
					<div class="prog <?php echo $programs[0]; ?>"></div>
					<div class="prog <?php echo $programs[1]; ?>"></div>
					<div class="prog <?php echo $programs[2]; ?>"></div>
				<?php } ?>

			</div>

			
		
		
		</div>
		
	</div>

	<div class="work-type"><?php the_terms( get_the_id(), 'work', '<h4 class="fakecode">&lt;portfolio class="', '', '"&gt;&lt;&frasl;portfolio&gt;</h4>' ); ?></div>


	</article>

	<?php }//end while

		  

		//todo: add pagination
		}else{ ?>
			<h2>Sorry, no post to show.</h2>
  <?php } 

  fern_pagination_thumbs();
  ?>

	
</main>


</div>

<?php get_footer(); ?>