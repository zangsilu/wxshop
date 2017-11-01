<?php

namespace app\api\model;


use think\Db;

class Banner extends BaseModel
{
    public static function getBannerById($id)
    {
        $result = Db::table('banner')->field('banner.*,banner_item.*')->where('banner.id','=',$id)->join('banner_item','banner_item.banner_id=banner.id','left')->select();
        echo "<pre>";
        print_r($result);
        echo "</pre>";die;
    }
}