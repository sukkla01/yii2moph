<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Contract;
class WidgetsController extends Controller{
    
    public function actionGrid(){
        $dataProvider = new ActiveDataProvider([
            'query'=>Contract::find(),
        ]);
        return $this->render('grid',['dataProvider'=>$dataProvider]);
    }
    
    public function  actionList(){
        
         $dataProvider = new ActiveDataProvider([
            'query'=>Contract::find(),
        ]);
         
        return $this->render('list',['dataProvider'=>$dataProvider]);
    }
    
    public function actionDetail($id){
        $model=  Contract::findOne($id);
        return $this->render('detail',['model'=>$model]);
    }
    
}