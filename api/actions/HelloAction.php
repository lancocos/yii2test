<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/23
 * Time: 22:51
 */

namespace api\actions;


use yii\base\Action;

class HelloAction extends  Action
{
    public function run(){
        $params = \yii::$app->request->get();
        print_r($params);
    }

}