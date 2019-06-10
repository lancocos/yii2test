<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10
 * Time: 17:07
 */

namespace frontend\forms;


use yii\base\Model;

class ValidatorTest extends  Model
{

    public $name;

    public function rules()
    {
        return[
            ['name','required'],
            ['name','email']
        ];
    }
}