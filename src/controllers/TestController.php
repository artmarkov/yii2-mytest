<?php

namespace artmarkov\mytest\controllers;

use Yii;
use yii\web\Controller;
use artmarkov\mytest\models\Tests;



class TestController extends Controller
{

    public function actionIndex()
    {
        // регистрируем ресурсы:
        \artmarkov\mytest\TestsAssetsBundle::register($this->view);


        $datas = Tests::find()->all();

        return $this->render('index',[
            'datas' => $datas
        ]);
    }

}
