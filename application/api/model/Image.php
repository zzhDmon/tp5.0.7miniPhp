<?php
/**
 * Created by PhpStorm.
 * User: Red
 * Date: 2019-03-04
 * Time: 22:46
 */

namespace app\api\model;

use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['delete_time', 'id', 'from'];
    // 固定写法 get Url Attr 读取器
    public function getUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }
}