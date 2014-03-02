<?php
include("./config.inc.php");
include(UTILS_PATH . "/wechat.php");
include(HANDLERS_PATH . "/handle_event.php");

$revData = $wechat->getRev();
$type = $revData->getRevType();
switch($type) {
    case Wechat::MSGTYPE_TEXT:
        $wechat->text("xx")->reply();
        break;
    case Wechat::MSGTYPE_EVENT:
        $ret = handle_event($revData);
        if($ret){
            $wechat->text(handle_event($revData))->reply();
        }
        break;
    case Wechat::MSGTYPE_IMAGE:
        break;
    default:
        $wechat->text("help info")->reply();
}
?>
