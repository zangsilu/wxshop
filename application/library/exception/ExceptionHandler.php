<?php

namespace app\library\exception;


use Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle
{
    private $status;
    private $code;
    private $message;

    public function render(Exception $e)
    {
        /**
         * 自定义异常
         */
        if($e instanceof ApiException){
            $this->status = $e->status;
            $this->code = $e->code;
            $this->message = $e->message;

        }
        /**
         * 非自定义异常
         */
        else{
            /**
             * 开发环境,正常抛错
             */
            if(config('app_debug')){
                return parent::render($e);
            }
            /**
             * 生产环境,屏蔽错误
             */
            $this->status = 500;
            $this->code = 0;
            $this->message = 'Server Internal Error.';
            //记录日志
            $this->recordErrorLog($e);
        }

        $request = Request::instance();
        $result = [
            'message'  => $this->message,
            'code' => $this->code,
            'request_url' => $request = $request->url()
        ];
        return json($result, $this->status);
    }

    /*
     * 将异常写入日志
     */
    private function recordErrorLog(Exception $e)
    {
        Log::init([
            'type'  =>  'File',
            'path'  =>  LOG_PATH,
            'level' => ['error']
        ]);
//        Log::record($e->getTraceAsString());
        Log::record($e->getMessage(),'error');
    }

}