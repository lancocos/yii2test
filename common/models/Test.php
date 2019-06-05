<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/5
 * Time: 11:17
 */

namespace common\models;


use yii\base\Model;

class Test extends Model
{

    public $name1;
    public $name2;
    public $abc;
    public $abc1;

    public function rules()
    {
        return[
            [['name1','name2'],'required']
        ];
    }

}