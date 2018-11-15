<?php
/**
 * Single Portfolio
 *
 * @file           single-portfolio.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('content', 'headline') ?>

<section class="portfolio-image">
	<div class="container">
		<img src="<?php the_field('image') ?>">
	</div>
</section>

<section class="content portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-5 left">
				<table>
					<tr>
						<td>Client</td>
						<td><?php the_field('client') ?></td>
					</tr>
					<tr>
						<td>URL</td>
						<td><a href="<?php the_field('url') ?>" target="_blank">Click here</a></td>
					</tr>
					<tr>
						<td>Tags</td>
						<td><?php the_tags('', ', ', ''); ?></td>
					</tr>
				</table>
			</div>
			<div class="col-md-7">
				<?php the_field('description') ?>
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>