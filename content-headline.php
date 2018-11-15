<?php
	if(is_front_page()){
?>

<section class="jumbotron">
	<div class="container">
		<p>I am a designer and developer.</p>
		<p>I like fun projects and fun people.</p>
		<p>I like designing and developing fun projects with fun people.</p>
	</div>
</section>

<?php
	} else {
?>

<section class="headline">
  <div class="container">                      
		<h1><?php the_title(); ?></h1>
  </div>
</section>

<?php
	}
?>

<?php if(is_user_logged_in()){ ?>

<section class="utility">
	<div class="container">
		<?php edit_post_link('<i class="fa fa-pencil"></i>'); ?>
	</div>
</section>

<?php } ?>

<?php if(is_singular('portfolio') || is_single()){ ?>

<section class="utility">
	<div class="container">
		<?php if(is_singular('portfolio')){ ?>
			<span><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> %title'); ?></span>
			<span><a href="<?php bloginfo('url'); ?>/portfolio"><i class="fa fa-home"></i></a></span>	
			<span><?php next_post_link('%link', '%title <i class="fa fa-angle-double-right"></i>'); ?></span>
		<?php } else { ?>
			<span><i class="fa fa-calendar"></i><time class="post-date"><?php the_date(); ?></time></span>
			<span><i class="fa fa-tags"></i><?php echo the_category(', '); ?></span>
			<span><a href="<?php bloginfo('url'); ?>/blog"><i class="fa fa-home"></i></a></span>	
		<?php } ?>
	</div>
</section>

<?php } ?>