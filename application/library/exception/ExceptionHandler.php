<?php

namespace app\library\exception;


use app\helper\StringHelper;
use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $status;
    private $code;
    private $message;
    private $line;

    public function render(Exception $e)
    {
        /**
         * 自定义异常
         */
        if($e instanceof ApiException){
            $this->status = $e->status;
            $this->code = $e->code;
            $this->message = StringHelper::isJson($e->message) ? json_decode($e->message) : $e->message;
            $this->line = '在'.$e->getFile().'第'.$e->getLine().'行';

            if(!config('app_debug')){
                $this->line = null;
            }

        }
        /**
         * 非自定义异常
         */
        else{
            /**
             * 开发环境,正常抛错
             */
            if(config('app_debug')){
                $this->status = 500;
                $this->code = $e->getCode();
                $this->message = $e->getMessage();
                $this->line = '在'.$e->getFile().'第'.$e->getLine().'行';
                return parent::render($e);
            }else{
                /**
                 * 生产环境,屏蔽错误
                 */
                $this->status = 500;
                $this->code = 0;
                $this->message = 'Server Internal Error.';
                //记录日志
                $this->recordErrorLog($e);
            }
        }

        $request = Request::instance();
        $result = [
            'status'  => $this->status,
            'code' => $this->code,
            'message'  => $this->message,
            'line'  => $this->line,
            'request_url' => $request = $request->domain().'/'.$request->url()
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