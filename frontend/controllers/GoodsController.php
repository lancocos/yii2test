<?php

namespace frontend\controllers;
use frontend\models\Goods;
use frontend\models\Hello;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Response;

class GoodsController extends Controller
{

    public function behaviors()
    {
        return [
            'logtest'=>[
                'class'=>\frontend\components\ActionTimeFilter::className(),
            ],
            'iptest'=>[
                'class'=>\frontend\components\ActionIpFilter::className()
            ],
        ];
    }

    public function actionIndex()
    {

        //\Yii::$app->getResponse()->format=Response::FORMAT_JSON;
        //return ['name'=>'imwz','code'=>200];
        $model = new Goods();
        return $this->render('index',['model'=>$model]);
    }

    public function actionDetail($id=1){
        $good = Goods::find($id)->asArray();
        print_r($good);
    }

    public function actionLists(){
        //print_r(\Yii::$app->user->isGuest);
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

    public function actions()
    {
        return [
            'h1' => 'api\actions\HelloAction',
        ];
    }
    public function actionHello()
    {
        $hello = new Hello;
        $hello->setScenario('reg');
        if ($hello->load(\Yii::$app->request->post()) && $hello->validate()) {
            echo 111;
        }
        return $this->renderPartial('login', compact('hello'));


    }

}
