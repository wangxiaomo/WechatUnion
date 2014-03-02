<?php

function handle_event($revData) {
    $eventData = $revData->getRevEvent();

    if($eventData){
        if($eventData['event'] == 'subscribe'){
            // handle 关注订阅事件
            if(isset($eventData['key']){
                return "欢迎从二维码扫描关注";
            }else{
                return "欢迎关注";
            }
        }

        if($eventData['event'] == 'SCAN'){
            // 已关注时的QR扫描
            return;
        }
    }
}

?>
