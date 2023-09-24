<?php

namespace Serv\Facade;

use Serv\Comm\Facade;
use Serv\Service\ValidatorClass;

/**
 * @method static bool isMobile(string $str)
 * @method static bool isPassword(string $str)
 * @method static bool isEmail(string $str)
 * @method static bool isSms(string $str)
 * @method static bool isIdNum(string $str)
 *
 * @method static string filterMobile(string $str)
 * @method static string filterPassword(string $str)
 * @method static string filterEmail(string $str)
 * @method static string filterSms(string $str)
 * @method static string filterIdNum(string $str)
 */


class Validator extends Facade
{


    protected static function getAccessor(): string
    {
        return ValidatorClass::class;
    }


}