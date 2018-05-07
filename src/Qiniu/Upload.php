<?php

namespace Rookie\Cloud\Qiniu;


use Qiniu\Storage\UploadManager;

class Upload
{

    public $errorMsg;  //错误信息

    public function uploadFile($token,$file,$cloudFileName)
    {
        $uploadMgr = new UploadManager();
        list($ret,$err) = $uploadMgr->putFile($token,$cloudFileName,$file);
        if($err != null){
            $this->errorMsg = $err;
            return false;
        }
        return $ret;
    }


}