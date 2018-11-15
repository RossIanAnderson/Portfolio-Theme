<?php
/**
 * Page Template
 *
 * @file           page.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('content', 'headline'); ?>

<?php get_template_part('content'); ?>
                                                      
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>                  

<?php get_footer(); ?>
