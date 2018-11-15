<?php if(is_page() || is_single()){ ?>
<section class="content">
	<div class="container">
		<?php 
			the_content();
			wp_link_pages();
		?>                                       
	</div>
</section>
<?php } else { ?>
<article>
	<section class="post-headline">
		<div class="container">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
	</section>
	<section class="utility">
		<div class="container">
			<span><i class="fa fa-calendar"></i><time class="post-date"><?php the_date(); ?></time></span>
			<span><i class="fa fa-tags"></i><?php echo the_category(', '); ?></span>
			<?php if(is_single()){ ?>
			<span><a href="<?php bloginfo('url'); ?>/blog"><i class="fa fa-home"></i></a></span>
			<?php } ?>
		</div>
	</section>
	<section class="post-body">
		<div class="container">
			<?php 
				if(is_single()){ 
					the_content();
				}
				else {
					the_excerpt();
				}
			?>	
		</div>
	</section>   
</article>

<?php } ?>