<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/5
 * Time: 11:19
 */

namespace frontend\controllers;


use common\models\Test;
use frontend\forms\ValidatorTest;
use yii\web\Controller;

class TestController extends  Controller
{
    public function actionIndex(){
        $model = new Test();
        if(\Yii::$app->request->isPost){
            if($model->load(\Yii::$app->request->post()) && $model->validate()){
                print_r(\Yii::$app->request->post());
                print_r($model->abc);
                return ;
            }
        }
        return $this->render('index',compact('model'));
    }


    public function actionValidator(){
        $model = new ValidatorTest();
        if(\Yii::$app->request->isPost && $model->load(\Yii::$app->request->post()) && $model->validate()){
            var_dump($model);
        }
        return $this->renderPartial('validator',compact('model'));
    }

}