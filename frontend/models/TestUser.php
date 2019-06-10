<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/9
 * Time: 14:31
 */

namespace frontend\models;


use yii\web\IdentityInterface;

class TestUser implements  IdentityInterface
{

    public function login(){
        return true;
    }

    public static function findIdentity($id)
    {
        // TODO: Implement findIdentity() method.
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}