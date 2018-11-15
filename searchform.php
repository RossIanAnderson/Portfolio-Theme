<?php
/**
 * Search Form Template
 *
 * @file           searchform.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

<form method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Search</label>
    <input type="text" class="form-control search-query" name="s" placeholder="<?php esc_attr_e('search here &hellip;', 'raportfolio'); ?>">
	  </div>
	<button type="submit" class="btn btn-default" value="<?php esc_attr_e('Search', 'raportfolio'); ?>">Search</button>
</form>