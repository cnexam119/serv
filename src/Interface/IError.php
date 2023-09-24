<?php

namespace Serv\IFace;

interface IError
{
    /**
     * @doc 0表示成功
     */
    const SUCCESS = 0;


    /**
     * @doc 可以直接弹窗的错误，即只用通知，不需要客户端识别的错误
     */
    const FAIL = 10001;

    /**
     * @doc 20-29 token相关错误码
     */
    const FAIL_ACCESS_TOKEN_EXPIRE = 10100;
    const FAIL_ACCESS_TOKEN_DEPRECATED = 10101;
    const FAIL_REFRESH_TOKEN_EXPIRE = 10102;
    const FAIL_REFRESH_TOKEN_DEPRECATED = 10103;

    /**
     * @doc 31-39 权限相关
     */

    const FAIL_NO_LOGIN = 10200;
    const FAIL_NO_RES =10201;
    const FAIL_NO_PRIV =10202;

    function success(array $data):array;
    function fail(string $msg):array;
    public function failParameterError():array;

    public function failAccessTokenExpire():array;
    public function failAccessTokenDeprecated():array;
    public function failRefreshTokenExpire():array;
    public function failRefreshTokenDeprecated():array;

    public function failNoLogin():array;
    public function failNoRes():array;
    public function failNoPriv():array;



}