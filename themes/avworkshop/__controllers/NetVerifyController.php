<?php
/**
 *
 * Date: 4/20/13
 * Time: 5:33 PM
 *
 */ 
class NetVerifyController {

    public function rgget($name, $array=null){
        if(!isset($array))
            $array = $_GET;

        if(isset($array[$name]))
            return $array[$name];

        return "";
    }
    public function Add_NetVerify_Document_Client(){
        $headers = array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic OTI3YWVlMmEtMzk1YS00NWMzLWE2OWEtYjc5OGJiOTA1NTU4OnM2Q21wR05hRW5GcnRZQUlJaWlTRWhaUW5jMjE3ejlM"
        );
        $netVerifyData = new stdClass();
        $netVerifyData->merchantScanReference=UUID::v5combo($this->rgget('HTTP_USER_AGENT',$_SERVER).$this->rgget('REMOTE_ADDR',$_SERVER));
        $netVerifyData->customerID=UUID::v5combo($this->rgget('REMOTE_ADDR',$_SERVER) . $this->rgget('HTTP_USER_AGENT',$_SERVER));
        $netVerifyData->country='USA';
        $netVerifyData->authorizationTokenLifetime=3000;
        $netVerifyData->errorUrl=home_url('netverifyerror/','https');
        $netVerifyData->callbackUrl=home_url('netverifycallback/','https');
        $netVerifyData->successUrl=home_url('netverifysuccess/','https');

        $url = 'https://netverify.com/api/netverify/v2/initiateNetverify';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($netVerifyData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    //        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSLVERSION, 3);

        $response = curl_exec($ch);
    //        if (FALSE === $response)
    //            throw new Exception(curl_error($ch), curl_errno($ch));
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if(gettype($ch) == 'resource')
            curl_close($ch);
        if ($http_status != 200) {
            echo "<!--" . print_r($response,true) . "-->";
    //            throw new Exception(print_r($response,true));
        }
        $responseObject=json_decode($response);
        ?>
        <script type="text/javascript" src="https://resources.netverify.com/widget/jumio-verify/2.0/iframe-script.js">
        </script>
        <script type="text/javascript">
            /*<![CDATA[*/
            /* <?=print_r(json_encode($netVerifyData))?>*/
            JumioClient.setVars({
                locale: "en",
                authorizationToken: "<?=$responseObject->authorizationToken?>"
            }).initVerify("JUMIOIFRAME");
            /*]]>*/
        </script>
    <?php
        }
}
