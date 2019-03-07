<?php
/**
 * Created by PhpStorm.
 * User: 59yun
 * Date: 2019/3/7
 * Time: 11:28
 */

namespace app\api\model;

use think\Model;

class UserAddress extends BaseModel
{
    protected $hidden =['id', 'delete_time', 'user_id'];

}