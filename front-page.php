<?php
/**
 * Front Page Template
 *
 * @file           front-page.php
 * @package        ra-portfolio
 * @author         Ross Anderson
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

<?php get_header(); ?>

<?php $pages = get_pages();
foreach ($pages as $page_data) {
  $content = apply_filters('the_content', $page_data->post_content);
  $title = $page_data->post_title;
	$slug = $page_data->post_name;
?>
  <div class='<?=$slug?>'>
		<div class="container">
			<h2><?=$title?></h2>
			<p><?=$content?></p>
		</div>
	</div>
<?php
}
?>

<?php the_post(); ?>

<?php get_template_part('content', 'headline'); ?>

<section class="content">
	<div class="container">
		<?php get_template_part('content', 'portfolio'); ?>
	</div>
</section>

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>

<?php get_footer(); ?>
