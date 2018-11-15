<?php 

  $num_posts = ( is_front_page() ) ? 8 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

	if ( $query->have_posts() ) {

?>
	
	<div class='row portfolio-items'>
	
	<?php
		$c = 0;
		
		while ( $query->have_posts() ) {
			$query->the_post();
	?>
			
			<div class='portfolio-item col-sm-6 col-md-4 col-lg-3'>
				<a href='<?php the_permalink() ?>'>
					<div class='portfolio-item-image'>
						<img src='<?php the_field('thumb'); ?>' alt="Thumbnail for <?php the_title(); ?>">
					</div>
					<p><?php the_title() ?></p>
				</a>
			</div>
			
			<?php
				$c++;
				if(($c % 4) == 0 ){
					echo "<div class='clearfix visible-lg-block'></div>";					
				}
				if(($c % 3) == 0 ){
					echo "<div class='clearfix visible-md-block'></div>";					
				}
				if(($c % 2) == 0 ){
					echo "<div class='clearfix visible-sm-block'></div>";					
				}
			?>
			
	<?php
		}
	?>
		
	</div>
		
<?php
	} 
?>                