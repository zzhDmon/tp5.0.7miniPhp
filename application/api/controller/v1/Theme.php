<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;

class Theme
{
    /**
     * @url /theme?id1= id2
     * @return 一组theme模型
     */
    public function getSimpleList($ids = '')
    {
//        $validate = new IDCollection();
        $validate = new IDCollection();
        $validate->goCheck();

        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
//        $result = ThemeModel::getThemeList($ids);

        if ($result->isEmpty()) {
            throw new ThemeException();
        }

        // 框架会自动序列化数据为JSON，所以这里不要toJSON！
//        $result = $result->hidden(['products.imgs'])
//            ->toArray();
//        $result = $result->hidden([
//            'products.category_id','products.stock','products.summary']);
        return $result;
    }
    public function getComplexOne($id)
    {
//        return 'here';
        (new IDMustBePositiveInt())->goCheck();
        $theme = ThemeModel::getThemeWithProducts($id);

        if(!$theme){
            throw new ThemeException();
        }
        return $theme->hidden(['products.summary'])->toArray();
    }
}
