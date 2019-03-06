<?php
/**
 * Created by PhpStorm.
 * User: Red
 * Date: 2019-03-05
 * Time: 22:30
 */
return [
    //  +---------------------------------
    //  微信相关配置
    //  +---------------------------------

    // 小程序app_id
    'app_id' => 'wx6bb3d3affbbb3e4e',
    // 小程序app_secret
    'app_secret' => '5dfef030efa0dabccbd830d44e8c2a23',

    // 微信使用code换取用户openid及session_key的url地址
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?" .
        "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s",


];
