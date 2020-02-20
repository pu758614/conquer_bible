<?php
include_once("conf/conf.php");
include_once("lib/common.php");
include_once("lib/db_lib.php");
// // print_r(dirname(__DIR__));
$db = NEW db_lib;
$result = array(
    "error" => 1,
    "msg"   => '',
);
$uuid = 'U7024af33ac34455f97b39b7bee8b8436';
$msg  = isset($_POST['msg'])?trim($_POST['msg']):'';
$db->record_msg_log($uuid,$msg);

$user_info = $db->getUserInfo($uuid,'uuid');
if(count($user_info)==0){
    $line_user_result = $db->addLineUser('U7024af33ac34455f97b39b7bee8b8436');
    if($line_user_result){
        $user_info = $db->getUserInfo($line_user_result,'uuid');
    }
}



$player_info = $db->getPlayerInfo($user_info['id']);
if(count($player_info)==0){
    $add_plyer_result = $db->addPlyerUser($user_info['id']);
    if($line_user_result){
        $player_info = $db->getPlayerInfo($add_plyer_result);
    }
}

$BibleBook= $db->getBibleBook();
$action = substr($msg, 0,1);
$new_msg = substr($msg, 1);

$player_id = isset($player_info['id'])?$player_info['id']:'';


$analy_result = analysis_str($new_msg);
if($analy_result['error']==1){
    $result['msg'] = $analy_result['error_msg'];
    goto end;
}

switch ($action) {
    case '+':
        $action_str = '閱讀';
    case '-':
        $read_resule = $db->readBible($player_id,$action,$analy_result['data']);
        $chapter_str = implode(",",$analy_result['data']['chapter']);
        if($action=='-'){
            $action_str = '移除';
        }
        $result = array(
            "error" => 0,
            "msg"   => '已'.$action_str.'了'.$analy_result['data']['book'].$chapter_str."章",
        );
        $db->sortPlayerChapter($player_id);
        break;
    default:
        // code...
        break;
}


end:
    echo json_encode($result);
?>