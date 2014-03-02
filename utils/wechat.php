<?php
require_once(LIBS_PATH . "/wechat-php-sdk/wechat.class.php");

$wechat_options = array(
    "token" =>  APP_TOKEN,
    "appid" =>  APP_ID,
    "appsecret" =>  APP_SECRET,
);
$wechat = new Wechat($wechat_options);
$wechat->valid();
?>
