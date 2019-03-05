<?php
/**
 * Created by PhpStorm.
 * User: Red
 * Date: 2019-03-04
 * Time: 20:10
 */

namespace app\api\model;


use think\Model;

class Banner extends BaseModel
{
    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }
    //

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerById($id)
    {
//        删除前
        $banner = self::with(['items','items.img'])
            ->find($id);
//        $banner = self::with(['items'])
//            ->find($id);
//         $banner = BannerModel::relation('items,items.img')
//             ->find($id);
        return $banner;
    }
}