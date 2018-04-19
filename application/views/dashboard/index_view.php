<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
    <h2 class="text-center mb-5"><?php echo lang('dashboard_welcome'); ?></h2>

    <form action="Stripe_payment/checkout" method="POST">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="pk_test_X57ascOAvczK48th695qm8jB"
		data-amount="10000"
		data-name="Agora"
		data-description="<?php echo lang('v_register'); ?>"
		data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
		data-locale="auto"
		data-zip-code="true">
	</script>
    </form>
</div>
