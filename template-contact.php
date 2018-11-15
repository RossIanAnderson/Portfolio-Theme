<?php
/**
 * Template Name: Contact Page
 *
 * @file           template-contact.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0.0
 */
?>

<?php get_header(); ?>

<?php the_post() ?>

<?php get_template_part('content', 'headline'); ?>

<?php
	
	if(isset($_POST['submit'])){
		if(
			isset($_POST['contactName']) && $_POST['contactName'] != '' &&
			isset($_POST['contactEmail']) && $_POST['contactEmail'] != '' &&
			isset($_POST['contactEnquiry']) && $_POST['contactEnquiry'] != ''
		){
			$name = $_POST['contactName'];
			$email = $_POST['contactEmail'];
			$enquiry = $_POST['contactEnquiry'];
			
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					
        $emailTo = get_option('admin_email');
        $subject = 'From '.$name;
        $body = "Name: $name \n\nEmail: $email \n\nComments: $enquiry";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
				$sent = true;
			}
			else {
				$error = true;
				$message = 'Gonna need a proper email.';
			}
		}
		else {
			$error = true;
			$message = 'All fields required.';
		}
	}
?>

<section class="contact content">
	<div class="container">
		<div class="row">
			<?php if(isset($sent) && $sent == true) { ?>
	      <p class="col-md-10 col-md-offset-1">Thank you for your message! You'll be sure to get a response soon :)</p>
	    <?php } else { ?>

			<form action="" method="post" class="col-md-8 col-md-offset-2">
				<?php the_content(); ?>
				<div class="row">
					<div class="form-group col-md-6">
				    <label class="sr-only" for="name">Name</label>
				    <input type="text" class="form-control input-lg" id="name" placeholder="Name" name="contactName">
				  </div>
				  <div class="form-group col-md-6">
				    <label class="sr-only" for="email">Email</label>
				    <input type="text" class="form-control input-lg" id="email" placeholder="Email" name="contactEmail">
				  </div>
				</div>
				<div class="form-group">
					<label class="sr-only" for="enquiry">Enquiry</label>
					<textarea id="enquiry" class="form-control input-lg" placeholder="Enquiry" rows="6" name="contactEnquiry"></textarea>
				</div>
				<?php if(isset($error) && $error == true) { ?>
				  <div class="alert alert-dismissible alert-danger fade in col-md-10">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  	<span aria-hidden="true">&times;</span>
					  </button>
					  <strong>Whoops!</strong> <?=$message?>
					</div>
	      <?php } ?>
				
				<button type="submit" name="submit" class="btn btn-submit btn-lg pull-right">Submit</button>
				
			</form>
			
			<?php } ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>
