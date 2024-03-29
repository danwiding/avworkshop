<?php
/**
 *
 * Date: 4/20/13
 * Time: 4:54 PM
 *
 */

require_once(LIB_PATH .  '/stripe-php/lib/Stripe.php');
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

    /**
     * @param $scanReference
     * @return LendUserModel
     */
    public static function GetUserByScanReference($scanReference){
        $lendUserModel = new LendUserModel();
        $lendUserModelList= $lendUserModel->GetList(array(
                array('merchantIdScanReference','=',$scanReference)
            )
        );
        if(empty($lendUserModelList)){
            return null;
        }
        else{
            return $lendUserModelList[0];
        }
    }
    /**
     * @param $scanReference
     * @return LendUserModel
     */
    public static function GetUserByJumioScanReference($scanReference){
        $lendUserModel = new LendUserModel();
        $lendUserModelList= $lendUserModel->GetList(array(
                array('jumioIdScanReference','=',$scanReference)
            )
        );
        if(empty($lendUserModelList)){
            return null;
        }
        else{
            return $lendUserModelList[0];
        }
    }

    public function SetStripeCustomer($token){
        Stripe::setApiKey(STRIPE_SECRET_KEY);

        $stripeCustomer = Stripe_Customer::create(array(
            "description" => "Customer for {$this->wp_user}",
            "card" => $token // obtained with Stripe.js
        ));
        $this->stripe_token=$stripeCustomer->id;
        $this->Save();
    }
}
