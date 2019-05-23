<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/23
 * Time: 17:04
 */

namespace api\modules\v1\controllers;


use yii\rest\ActiveController;
use yii\web\Response;

class SiteController extends ActiveController
{

    public function actionIndex(){
        $data = \Yii::$app->request->post();
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $data;
    }
}