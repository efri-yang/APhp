<?php 
/**
 * 生成验证码
 * @param int $type
 * @param int $length
 * @return string
 */
function buildRandomString($type=1,$length=4){

    if($type==1)
    {
        /*join函数把数组转换为字符串。。join() 函数是 implode() 函数的别名*/
        $chars=join("",range(0,9));
    }elseif ($type==2) {
        /*array_merge函数合并数组*/
        $chars=join("",array_merge(range("a","z"),range("A","Z")));
    }elseif($type==3)
    {
        $chars=join("",array_merge(range("a","z"),range("A","Z"),range(0,9)));
    }

    if($length>strlen($chars))
    {
        exit("字符串长度不够");
    }
    /*打乱字符串*/
    $chars=str_shuffle($chars);
    return substr($chars,0,$length);

}


/**
 * 生成唯一字符串
 * @return string
 */
function getUniName(){
	return md5(uniqid(microtime(true),true));
}

/**
 * 得到文件的扩展名
 * @param string $filename
 * @return string
 */
function getExt($filename){
	return strtolower(end(explode(".",$filename)));
}
