<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/8/2
 * Time: 14:50
 */

namespace whiStle\baiduOcr;

use Illuminate\Support\ServiceProvider;
use whiStle\baiduOcr\AipOcr;

class BaidOcrProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //配置
        $this->publishes([
            __DIR__.'\ocr.php' => config_path('ocr.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('AipOcr',function ($app) {
            return new AipOcr(config('ocr.APP_ID'),config('ocr.API_KEY'),config('ocr.SECRET_KEY'));
        });
    }

    public function provides()
    {
        return array('AipOcr');
    }

    public function __call($name, $arguments)
    {
        echo '3';
        exit();
        // TODO: Implement __call() method.
    }
}