<?php
/**
 * Created by PhpStorm.
 * User: 59yun
 * Date: 2019/3/8
 * Time: 9:47
 */

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\service\Pay as PayService;
//use app\api\service\WxNotify;
use app\api\validate\IDMustBePositiveInt;

class Pay extends  BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'getPreOrder']
    ];

    public function getPreOrder($id='')
    {
        (new IDMustBePositiveInt()) -> goCheck();
        $pay= new PayService($id);
        return $pay->pay();
    }
}