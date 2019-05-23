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
        $query = Goods::find();
        $pagination = new Pagination([
            'defaultPageSize'=>3,
            'totalCount'=>$query->count()
        ]);
        $goods = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->renderPartial('lists',compact('goods','pagination'));
    }

}
