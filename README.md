## 介绍
这是百度AI平台的OCR工具laravel扩展包，他提供例如身份证照片识别，银行卡照片识别，文字识别、网图OCR识别、生僻字OCR识别、行驶证识别、驾驶证等其他文字识别功能。

## install
```
    composer require whistle/baiduocr
```
```
    php artisan vendor:publish
```
```
    在config/app.php文件中provider数组添加 whiStle\baiduOcr\BaidOcrProvider::class
    在config/app.php文件中aliases数组数组中添加'Ocr'=>whiStle\baiduOcr\AipOcrFacade::class
```
```
    配置config/ocr.php文件
```
    
##  use
```
    识别身份证
    Ocr::idcard(string $img, bool $true)
```  
```
    银行卡识别
    Ocr::bankcard(string $img)
```
```
    通用文字识别(含文字位置信息)
    Ocr::general(string $img)
```
```
    通用文字识别(不含文字位置信息)
    Ocr::basicGeneral(string $img)
```
```
    网图OCR识别
    Ocr::webImage(string $img)
```
```
    生僻字OCR识别
    Ocr::enhancedGeneral(string $img)
```
```
    行驶证识别
    Ocr::vehicleLicense(string $img)
```
```
    驾驶证
    Ocr::drivingLicense(string $img)
```
```
    车牌
    Ocr::licensePlate(string $img)
```

