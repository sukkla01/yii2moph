<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Contract;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii;
use \yii\data\ArrayDataProvider;

class QueryController extends  Controller{
    
    public function  actionQuery1(){
        $data=  Contract::find()
                ->where('id>1')
                ->orderBy('firstname','lastname');
        $dataprovider=new ActiveDataProvider([
            'query'=>$data,
        ]);
        
        return $this->render('query1',['dataprovider'=>$dataprovider]);
    }
    
    public function  actionQuery2(){
        $query = new Query;
        $query->select('*')
              ->from('contract')
              ->where('id>1')
              ->all();
         $dataprovider = new ActiveDataProvider([
            'query'=>$query,
        ]);
         
         $query1 = new Query;
        $query1->select('firstname,lastname')
              ->from('contract')
              ->all();
         $dataprovider1 = new ActiveDataProvider([
            'query'=>$query1,
        ]);
        return $this->render('query2',['dataprovider'=>$dataprovider,'dataprovider1'=>$dataprovider1,'test'=>'dd']);
    }
    
    
    public function actionQuery3(){
        
        $connection = Yii::$app->db;
        $contact = $connection->createcommand('select * from contract')->queryAll();
        
        $dataProvider = new ArrayDataProvider([
            //'key' => 'hoscode',
            'allModels' => $contact,
            'pagination' => [
                'pageSize'=>2
            ],
        ]);
        
        return $this->render('query3',['contact'=>$dataProvider]);
    }
}
