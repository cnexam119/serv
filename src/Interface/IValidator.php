<?php

namespace Serv\IFace;

interface IValidator
{
    public function isMobile(string $str):bool;
    public function isPassword(string $str):bool;
    public function isEmail(string $str):bool;
    public function isIdNUm(string $str):bool;
    public function isSms(string $str):bool;
}