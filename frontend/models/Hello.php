<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 11:57
 */

namespace frontend\models;


use yii\base\Model;

class Hello extends  Model
{

    public $att1;
    public $att2;
    public $att3;

    public function attributes()
    {
        return [
            'att1'=>'name',
            'att2'=>'email',
            'att3'=>'password',
        ];
    }

    public function scenarios()
    {
        return [
            'reg'=>['att1','att2','att3'],
            'login'=>['att1','att3'],
        ];

    }

    public function rules()
    {
        return[
            [['att1','att2','att3'],'required','on'=>'reg'],
            [['att1','att3'],'required','on'=>'login'],

        ];
    }
}