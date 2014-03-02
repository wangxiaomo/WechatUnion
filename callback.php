<?php
include("./config.inc.php");
include(UTILS_PATH . "/wechat.php");

$type = $wechat->getRev()->getRevType();
switch($type) {
    case Wechat::MSGTYPE_TEXT:
        $wechat->text("hello, I'm wechat")->reply();
        exit;
        break;
    case Wechat::MSGTYPE_EVENT:
        break;
    case Wechat::MSGTYPE_IMAGE:
        break;
    default:
        $wechat->text("help info")->reply();
}
?>
