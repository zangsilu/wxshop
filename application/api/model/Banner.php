<?php

namespace app\api\model;

class Banner extends Base
{
    public function items()
    {
        return $this->hasMany('BannerItem','banner_id','id');
    }

    /* public static function getBannerById($id)
     {
         $result = Db::table('banner')->field('banner.*,banner_item.*')->where('banner.id','=',$id)->join('banner_item','banner_item.banner_id=banner.id','left')->select();
         echo "<pre>";
         print_r($result);
         echo "</pre>";die;
     }*/
}