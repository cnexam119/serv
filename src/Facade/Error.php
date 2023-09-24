<?php

namespace Serv\Facade;

use Serv\Comm\Facade;
use Serv\Service\ErrorClass;


/**
 * @method static array success(array $data)
 * @method static array fail(string $msg)
 * @method static array failParameterError()
 * @method static array failAccessTokenExpire()
 * @method static array failAccessTokenDeprecated()
 * @method static array failRefreshTokenExpire()
 * @method static array failRefreshTokenDeprecated()
 *
 * @method static array failNoLogin()
 * @method static array failNoRes()
 * @method static array failNoPriv()
 *
 */


class Error extends Facade
{

    protected static function getAccessor(): string
    {
        return ErrorClass::class;
    }

}