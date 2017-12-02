<?php

namespace app\api\controller\v1;

use app\api\controller\validate\IdMustBeInt;
use app\api\controller\validate\Limit;
use app\api\model\Product;
use app\library\exception\ApiException;
use think\Controller;
use think\Request;

class ProductController extends BaseController
{
    /**
     * 显示资源列表
     *
     * @return \think\response\Json
     * @throws ApiException
     */
    public function index()
    {
        (new Limit())->goCheck();
        $type = Request::instance()->get('type');
        $limit = Request::instance()->get('limit');
        if($type == Product::NEW){
            /**
             * @var $newProduct Product
             */
            $newProduct = Product::getNew($limit);
            if($newProduct->isEmpty()){
                throw new ApiException(0,400,'商品数据缺失.');
            }

            /**
             * collection() 方法可以将数据集数组转为数据集对象,从而可以更加灵活的操作数据
             * 或者直接修改 database.php配置文件 改为 'resultset_type'  => 'collection',
             */
            // $newProduct = collection($newProduct);


            $newProduct->hidden(['summary']);
            return json($newProduct);
        }
        throw new ApiException(0,400,'商品类型错误.');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
