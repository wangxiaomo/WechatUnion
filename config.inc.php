<?php

// 调试开关
define("APP_DEBUG", false);

// 微信相关配置
define("APP_TOKEN", "token_access_key");
define("APP_ID", "wx808abec528461ed9");
define("APP_SECRET", "0f187a5f42185abc8c97014ae1fc2c9a");

// 微信后台相关配置
define("APP_DOMAIN", "http://sxgajj.081818.com");
define("APP_CALLBACK", APP_DOMAIN . "/wangxiaomo/callback.php");

// 其他配置信息
define("APP_PATH", getcwd());
define("LIBS_PATH", APP_PATH . "/libs");
define("UTILS_PATH", APP_PATH . "/utils");
define("HANDLERS_PATH", APP_PATH . "/handlers");
?>
