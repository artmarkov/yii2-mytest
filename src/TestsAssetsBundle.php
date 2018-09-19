<?php

namespace artmarkov\mytest;

use yii\web\AssetBundle;

class TestsAssetsBundle extends AssetBundle
{

    public $sourcePath = '@vendor/artmarkov/yii2-mytest/assets';

    public $css = [
        'css/style.css'
    ];
}