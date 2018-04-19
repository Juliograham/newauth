<<<<<<< HEAD
	<a href="<?php echo base_url('user/login'); ?>" class="btn btn-info">Login</a>
	<a href="<?php echo base_url('register'); ?>" class="btn btn-primary">Register</a>
	<br/><br/>
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter</title>
</head>
<body>
<div id="container">
	<form action="Stripe_payment/checkout" method="POST">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="pk_test_X57ascOAvczK48th695qm8jB"
		data-amount="999"
		data-name="Stripe.com"
		data-description="Widget"
		data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
		data-locale="auto"
		data-zip-code="true">
	</script>
	</form>
</div>

</body>
</html>
>>>>>>> refs/remotes/origin/master
