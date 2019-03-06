<?php
/**
 * Created by PhpStorm.
 * User: 59yun
 * Date: 2019/3/6
 * Time: 11:15
 */

namespace app\api\service;


class Token
{
    // 生成令牌
    public static function generateToken()
    {
        $randChar = getRandChar(32);
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        $tokenSalt = config('secure.token_salt');
        return md5($randChar . $timestamp . $tokenSalt);
    }
}