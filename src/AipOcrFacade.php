<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/8/2
 * Time: 15:56
 */

namespace whiStle\baiduOcr;

use Illuminate\Support\Facades\Facade;
class AipOcrFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'AipOcr';
    }


}