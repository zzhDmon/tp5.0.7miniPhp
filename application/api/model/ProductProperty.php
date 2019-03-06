<?php
/**
 * Created by PhpStorm.
 * User: 59yun
 * Date: 2019/3/6
 * Time: 17:48
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden=['product_id', 'delete_time', 'id'];
}