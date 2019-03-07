<?php
/**
 * Created by PhpStorm.
 * User: 59yun
 * Date: 2019/3/7
 * Time: 13:09
 */

namespace app\api\controller;

use app\api\service\Token;
use think\Controller;

class BaseController extends Controller
{
    protected function checkExclusiveScope()
    {
        Token::needExclusiveScope();
    }

    protected function checkPrimaryScope()
    {
        Token::needPrimaryScope();
    }

    protected function checkSuperScope()
    {
        Token::needSuperScope();
    }
}