<?php
    header("Access-Control-Allow-Origin:*");
    header('Content-type:text/html;charset=utf-8');
    $ch = curl_init();
    $url = 'http://api.avatardata.cn/Lore/LoreClass?key=e483eed6b4d340f4b174ab4bf3fe4068';

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>