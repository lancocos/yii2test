<?php

namespace frontend\controllers;
use app\models\Mms;
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

        $start = time();
        $str = '';
        while(time()-$start<=1){
            echo microtime(true)."<br/>";
            usleep(1000);

        }
        echo 1;




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

    public function actionAbc1(){

        $gets = \Yii::$app->request->get();
        print_r($gets);
    }


    public function actionZs(){
        $model = Mms::findOne(1);
        if($model==null){
            $model = new Mms;
        }
        if(\Yii::$app->request->isPost){

            $data = \Yii::$app->request->post();
            if($model->load($data) && $model->validate()){
                //$model->version=0;
                try{
                    $model->save();
                }catch (\Exception $e){
                    return $e->getMessage();
                }

                return 'success';
            }
        }
        return $this->renderPartial('mms',compact('model'));
    }
    public function actionZs1(){
        $model = Mms::find(1)->asArray()->one();
        var_dump($model);
        exit;
        $this->renderPartial('');
    }

    public function actionWww(){
        echo 111;

    }

}
