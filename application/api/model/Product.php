<?php

namespace app\api\model;

class Product extends Base
{
    const NEW = 1;//新品

    public function getMainImgUrlAttr($value,$data)
    {
        if($data['from'] == 1){
            return config('params.img_prefix').$value;
        }
        return $value;
    }

    /**
     * 获取最新商品
     * @param int $limit
     *
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getNew($limit = 10)
    {
        return static::limit($limit)->order(['create_time'=>'desc'])->select();
    }
}
