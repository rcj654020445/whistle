<?php

/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/8/2
 * Time: 15:01
 */
namespace whiStle\baiduOcr;
class AipImageUtil{

    /**
     * 获取图片信息
     * @param  $content string
     * @return array
     */
    public static function getImageInfo($content){
        $info = getimagesizefromstring($content);

        return array(
            'mime' => $info['mime'],
            'width' => $info[0],
            'height' => $info[1],
        );
    }
}