<?php
/**
 * Footer Template
 *
 * @file           footer.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

	<footer>
		<div class="container">
	    <div class="row">
	      <div class="col-md-4">
	        <?php dynamic_sidebar('footer-left'); ?>
	      </div>
	      <div class="col-md-4">
	        <?php dynamic_sidebar('footer-middle'); ?>
	      </div>
	      <div class="col-md-4">
	        <?php dynamic_sidebar('footer-right'); ?>
	      </div>
	    </div>
		</div>
	</footer>
	
	<?php wp_footer(); ?>

	</body>
</html>