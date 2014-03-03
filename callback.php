<?php
include("./config.inc.php");
include(UTILS_PATH . "/wechat.php");
include(HANDLERS_PATH . "/handle_event.php");

$wechat = get_wechat();
$wechat->getRev();
$type = $wechat->getRevType();
switch($type) {
    case Wechat::MSGTYPE_TEXT:
        $wechat->text("xx")->reply();
        break;
    case Wechat::MSGTYPE_EVENT:
        $ret = handle_event($wechat);
        if($ret){
            $wechat->text(handle_event($wechat))->reply();
        }
        break;
    case Wechat::MSGTYPE_IMAGE:
        break;
    default:
        $wechat->text("help info")->reply();
}
?>
