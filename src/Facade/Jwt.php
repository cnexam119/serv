<?php

namespace Serv\Facade;


use Serv\Comm\Facade;
use Serv\Service\JwtClass;
use stdClass;

/**
 * @method static string encode(array $payload,string $privKey)
 * @method static stdClass decode(string $token,string $pubKey)
 * @method static array createPayload(string $sender, string $receiver, string $subject, string $info, int $liveSec)
 *
 */


class Jwt extends Facade
{
    protected static function getAccessor(): string
    {
        return JwtClass::class;
    }

}