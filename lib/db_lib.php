<?php 
include_once(dirname(__DIR__)."/vendor/autoload.php");
include_once(dirname(__DIR__)."/lib/common.php");
include_once(dirname(__DIR__)."/lib/db_crud.php");

class db_lib {   
    use DB_CRUD\DB_CRUD;
    function __construct(){
        date_default_timezone_set('asia/taipei');
        header("Content-type: text/html; charset=utf-8");
        // $this->db = ADONewConnection('mysql');
        // $this->db->Connect("localhost","root","123456789","bible");
    }
    
    function getUserInfo($id,$type='id'){
        if($type=='uuid'){
            $field = 'uuid';
        }else{
            $field = 'id';
        }
        $result = $this->getSingleById('line_user',$field,$id);
        return $result;
    }
    
    function addLineUser($user_uuid){
        global $channel_secre,$channel_access_token;
        
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($channel_access_token);
    
        
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channel_secre]);
        $response = $bot->getProfile($user_uuid);
        // exit;
        $profile = array();
        if ($response->isSucceeded()) {
            $profile = $response->getJSONDecodedBody();
        }
        pr($profile);
        return $profile;
    }
    
}


 ?>