<?php

namespace app\api\model;

use think\Model;

class Category extends Base
{
    public function img()
    {
        return $this->belongsTo('image','topic_img_id','id');
    }
}
