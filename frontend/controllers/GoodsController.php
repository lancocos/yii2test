<?php

namespace frontend\controllers;
use frontend\models\Goods;
use yii\data\Pagination;
use yii\web\Controller;

class GoodsController extends Controller
{
    public function actionIndex()
    {
        $model = new Goods();
        return $this->renderPartial('index',['model'=>$model]);
    }

    public function actionDetail($id=1){
        $good = Goods::find($id)->asArray();
        print_r($good);
    }

    public function actionLists(){
        print_r(\Yii::$app->user->isGuest);
        if(!\Yii::$app->cache->exists('a1')){
            echo "will set";
            \Yii::$app->cache->set('a1',1);
        }else{
            echo "has set",\Yii::$app->cache->set('a1',1);
        }
        var_dump(\Yii::$app->testCompent);
        $query = Goods::find();
        $pagination = new Pagination([
            'defaultPageSize'=>3,
            'totalCount'=>$query->count()
        ]);
        $goods = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->renderPartial('lists',compact('goods','pagination'));
    }

    public function actionAbc(){
        phpinfo();

    }

    public function actions(){
        return[
            'h1'=>'api\actions\HelloAction',
        ];
    }

}
