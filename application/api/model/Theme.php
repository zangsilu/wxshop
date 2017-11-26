<?php

namespace app\api\model;

class Theme extends Base
{
    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }

    public function product()
    {
        return $this->belongsToMany('Product','theme_product','product_id','theme_id');
    }

}
