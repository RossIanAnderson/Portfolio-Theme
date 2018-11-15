<?php
/**
 * Index Template
 *
 * @file           index.php
 * @package        ra-portfolio
 * @author         Ross Anderson
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post() ?>

	<?php get_template_part('content'); ?>

<?php endwhile; ?>

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

<?php } ?>

<?php get_footer(); ?>
