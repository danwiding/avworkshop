<?php /* Template Name: netverifysuccess */
/**
 *
 * Date: 4/20/13
 * Time: 9:26 PM
 *
 */
//merchant scan reference different on success redirect
if(!array_key_exists('jumioIdScanReference',$_GET) ||! array_key_exists('idScanStatus',$_GET))
    wp_redirect(home_url());
$model = LendUserModel::GetUserByJumioScanReference($_GET['jumioIdScanReference']);
$model->idScanStatus=$_GET['idScanStatus'];
?>
<h2>You've successfully uploaded your ID</h2>
<?php if(empty($model->stripe_token)):?>
<h2>One last step</h2>
<form action="/stripe" method="POST">
    <script
        src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
        data-key="<?=STRIPE_PUBLISHABLE_KEY?>"
        data-name="Save Credit Card"
        data-label="Save Credit Card"
        data-description="Card will not be charged until you rent"
        data-image="/128x128.png">
    </script>
</form>
<?php else:?>
<a href="/category/products/" target="_top">Click to submit</a>
<?php endif;?>