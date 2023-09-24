<?php

namespace Serv\Service;

use Serv\IFace\IError;

class ErrorClass implements IError
{

    public function success(array $data): array
    {
        return ['Code'=>static::SUCCESS, 'Msg'=>"操作成功"];
    }

    public function fail(string $msg="操作失败"):array
    {
        return $this->failCodeMsg(static::FAIL,$msg);
    }

    function failParameterError(): array
    {
        return $this->fail("参数错误");
    }


    /**
     * 此错误发生后，客户端需要监听错误码，更换access_token
     */
    public function failAccessTokenExpire(): array
    {
        return $this->failCodeMsg(static::FAIL_ACCESS_TOKEN_EXPIRE, "access_token已过期，请及时更换");
    }

    /**
     *  此错误发生后，基本断定已经在其他地方登录，需要跳转到登录
     */
    public function failAccessTokenDeprecated(): array
    {
        return $this->failCodeMsg(static::FAIL_ACCESS_TOKEN_DEPRECATED, "access_token已作废，请重新登陆");
    }


    /**
     * 此错误发生后,表示已掉线，需要重新登录
     */
    public function failRefreshTokenExpire(): array
    {
        return $this->failCodeMsg(static::FAIL_REFRESH_TOKEN_EXPIRE, "refresh_token已过期，请登录");
    }

    /**
     * 此错误发生后，基本断定已经在其他地方登录，需要跳转到登录
     */
    public function failRefreshTokenDeprecated(): array
    {
        return $this->failCodeMsg(static::FAIL_REFRESH_TOKEN_DEPRECATED, "refresh_token已作废，请登录");
    }


    /**
     * 此错误发生，客户端需要记录当前页面，并跳转到登陆
     */
    public function failNoLogin(): array
    {
        return $this->failCodeMsg(static::FAIL_NO_LOGIN, "您还没有登录");
    }

    /**
     * 后台角色错误，一般用于后台系统
     */
    public function failNoPriv(): array
    {
        return $this->failCodeMsg(static::FAIL_NO_PRIV, "您没有权限,请联系管理员开通");
    }


    /**
     * 出现此错误,一般客户端需要跳转到购买页面
     */
    public function failNoRes():array
    {
        return $this->failCodeMsg(static::FAIL_NO_RES, "您没有相关访问,请购买开通");
    }

    private function failCodeMsg(int $code,string $msg):array
    {
        return ['Code'=>$code,'Msg'=>$msg];
    }



}