<?php /* Template Name: netverify */
/**
 *
 * Date: 4/20/13
 * Time: 5:30 PM
 *
 */

$netVerifyController = new NetVerifyController();
add_action('wp_head', array($netVerifyController,'Add_NetVerify_Document_Client'));

get_header();
?>
<div id="JUMIOIFRAME"></div>
<?php

get_footer();