<?php
    header("Access-Control-Allow-Origin:*");
    header('Content-type:text/html;charset=utf-8');

    $id = isset($_GET["id"])?$_GET["id"]:1;
    $ch = curl_init();
    $url = 'http://api.avatardata.cn/Drug/Show?key=44a5adbe691f4cf99bb4851db8a5624d&id='.$id;

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>