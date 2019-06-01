<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/23
 * Time: 11:08
 */

namespace frontend\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $pass;
    public $email;

    public function rules()
    {
        return[
            [
                ['name','pass','email'],'required'
            ],
            [
             'email','email'
            ]
        ];
    }

}