<?php
    header("Access-Control-Allow-Origin:*");
    //乱码
    header('Content-type:text/html;charset=utf-8');
    @$id = $_GET["id"]?$_GET["id"]:1;
    @$page = $_GET["page"]?$_GET["page"]:1;
    @$rows = $_GET["rows"]?$_GET["rows"]:12;

    $ch = curl_init();
    $url = 'http://api.avatardata.cn/Cook/List?key=4edaf501f06d4df08a5e70b3af1e3300&id='.$id.'&page='.$page.'&rows=' .$rows;
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>