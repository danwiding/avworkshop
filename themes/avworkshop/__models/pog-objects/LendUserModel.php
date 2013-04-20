<?php
/**
 *
 * Date: 4/20/13
 * Time: 4:54 PM
 *
 */ 
class LendUserModel extends lends_user{

    protected $tableName = "lends_user";
    //put variables here

    public static function GetCurrentUser(){
        if(is_user_logged_in()){
            $wp_user = wp_get_current_user();
            $wpUserId=$wp_user->ID;
            $lendUserModel = new LendUserModel();
            $lendUserModelList= $lendUserModel->GetList(array(
                    array('wp_user','=',$wpUserId)
                )
            );
            if(empty($lendUserModelList)){
                $lendUserModel->wp_user=$wpUserId;
                return $lendUserModel;
            }
            else{
                return $lendUserModelList[0];
            }
        }
        return null;
    }
}
