
<?php
    header("Access-Control-Allow-Origin:*");
    header('Content-type:text/html;charset=utf-8');
    $ch = curl_init();
    $url = 'http://api.avatardata.cn/Top/TopClass?key=97cf28292c284536a75d5d20ab7f0a3b';

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>