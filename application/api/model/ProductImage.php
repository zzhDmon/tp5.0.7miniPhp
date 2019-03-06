<?php
/**
 * Created by PhpStorm.
 * User: 59yun
 * Date: 2019/3/6
 * Time: 17:47
 */

namespace app\api\model;


namespace app\api\model;


use think\Model;

class ProductImage extends BaseModel
{
    protected $hidden = ['img_id', 'delete_time', 'product_id'];
    public function imgUrl()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}