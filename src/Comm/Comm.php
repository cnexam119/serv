<?php

namespace Serv\Comm;

class Comm
{
    const ACT_INSERT = 1;
    const ACT_UPDATE = 2;
    const ACT_DELETE = 3;
    const ACT_SORT = 4; //改变顺序

    const ACT_ACTIVE = 5; //改变顺序

    public static function children($arr,$pidArr,&$result):void{
        $tmp=[]; //存放每次找到的id,作为下一次的pid数组
        foreach($arr as $v){
            if(in_array($v->pid,$pidArr)){
                $tmp[] = $v->id;
            }
        }
        if(count($tmp)>0){
            $result = array_merge($result,$tmp);
            self::children($arr,$tmp,$result);
        }
    }

    public static  function pager(&$itemList,$pageNum,$pageSize,$totalCount):array{
        $maxPage = ceil($totalCount/$pageSize);
        return [
            'itemList'=>$itemList,
            'pageNum'=> $pageNum,
            'pageSize'=>$pageSize,
            'totalCount' =>$totalCount,
            'maxPage'=>$maxPage
        ];
    }

    public static function hashMapDecode(array $redisHashMap):array{
        $result = [];
        foreach ($redisHashMap as $r){
            $result[] = json_decode($r);
        }
        return $result;
    }

    public static function hashMapEncode(array $rs):array{
        $result = [];
        foreach ($rs as $r){
            $result[$r->id] = json_encode($r,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_UNICODE);
        }
        return $result;
    }

    public static function strEnc($string=""):string{
        $chars = '';
        $len = strlen($string = iconv('utf-8', 'gbk', $string));
        for ($i = 0; $i < $len; $i++) {
            $chars .= str_pad(base_convert(ord($string[$i]), 10, 36), 2, 0, 0);
        }
        return strtoupper($chars);
    }

    public static function strDec($string=''):string{
        $chars = '';
        foreach (str_split($string, 2) as $char) {
            $chars .= chr(intval(base_convert($char, 36, 10)));
        }
        return @iconv('gbk', 'utf-8', $chars);
    }


    public static function getParent(&$arr,$id){ //$ps 为PID数组
        foreach($arr as $a){
            if($a['id'] == $id){
                return $a['pid'];
            }
        }
    }

}