<?php
/**
 * Template Name: Portfolio Page
 *
 * @file           template-portfolio.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

<?php get_header(); ?>

<section class="headline">
  <div class="container">                      
		<h1 class="entry-title"><?php the_title(); ?></h1>
  </div>
</section>
<?php if ( is_user_logged_in() ) { ?>
<section class="utility">
	<div class="container">
		<?php edit_post_link('<i class="fa fa-pencil"></i>'); ?>
	</div>
</section>
<?php } ?>
<section class="content">
	<div class="container">
		
		<?php get_template_part('content', 'portfolio'); ?>
		                       
	</div>
</section>



<?php get_footer(); ?>