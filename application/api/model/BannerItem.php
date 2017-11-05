<?php

namespace app\api\model;

class BannerItem extends Base
{
    public function image()
    {
        return $this->hasMany('Image','id','img_id');
    }
}
