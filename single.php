<?php
/**
 * Single
 * 
 * @file           single.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('content', 'headline') ?>

<?php get_template_part('content'); ?>

<?php comments_template(); ?>
                                                      
<?php get_footer(); ?>
