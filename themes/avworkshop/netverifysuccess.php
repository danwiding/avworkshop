<?php /* Template Name: netverifysuccess */
/**
 *
 * Date: 4/20/13
 * Time: 9:26 PM
 *
 */

if(!array_key_exists('merchantIdScanReference',$_GET) ||! array_key_exists('idScanStatus',$_GET))
    wp_redirect(home_url());
$model = LendUserModel::GetUserByScanReference($_GET['merchantIdScanReference']);
$model->idScanStatus=$_GET['idScanStatus'];
?>
<h2>Success Page</h2>
<a href="/stripe" target="_top">Go somewhere</a>