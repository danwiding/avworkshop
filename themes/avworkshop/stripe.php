<?php /* Template Name: stripe */
/**
 *
 * Date: 4/20/13
 * Time: 11:02 PM
 *
 */
if($_POST){
    $userModel = LendUserModel::GetCurrentUser();
    $userModel->stripe_token=$_POST['stripeToken'];
    $userModel->Save();
    wp_redirect(home_url());
}
?>

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
