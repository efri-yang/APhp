<?php 
  $servername = $_SERVER['SERVER_NAME'];//当前服务器
    $url_from = $_SERVER['HTTP_REFERER']; //前一URL
    if ($servername != substr($url_from, 0, strlen($servername))) {
        $is_same_site = false;
    } else {
        $is_same_site = true;
    }
     
    /* 动作 */
    if (!$is_same_site) {
        die('禁止爬墙~~');
    }
 ?>