<?php 
include_once("conf/conf.php");
include_once("lib/common.php");
include_once("lib/db_lib.php");
// // print_r(dirname(__DIR__));
$db = NEW db_lib;
echo "123456";
$db->addLineUser('U7024af33ac34455f97b39b7bee8b8436');
// $re = $db->getArrayById('sercice','id','2');
// $msg = isset($_POST['msg'])?trim($_POST['msg']):'';
// $user_uuid = isset($_POST['user_uuid'])?trim($_POST['user_uuid']):'';
// $user_info = $db->getUserInfo($user_uuid,'uuid');
// if($user_info == array()){
//     echo "123456";
//     $db->addLineUser('U7024af33ac34455f97b39b7bee8b8436');
// }
// switch ($msg) {
//     case '進攻':
// 
//         break;
// 
//     default:
//         // code...
//         break;
// }
//pr($user_info);

?>