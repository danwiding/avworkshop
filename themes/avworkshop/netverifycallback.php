<?php /* Template Name: netverifycallback */
/**
 *
 * Date: 4/20/13
 * Time: 9:27 PM
 *
 */

if(!array_key_exists('merchantIdScanReference',$_POST))
    wp_redirect(home_url());
$model = LendUserModel::GetUserByScanReference($_POST['merchantIdScanReference']);

foreach($model->pog_attribute_type as $property =>$db_attributes){
    if(array_key_exists($property,$_POST)){
        $model->$property=$_POST[$property];
    }
}
$model->Save();


