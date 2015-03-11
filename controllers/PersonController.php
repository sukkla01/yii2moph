<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\PersonForm;

class PersonController extends Controller{
    public function actionTest() {
        $name='สุจินต์ สุกกล้า';
        
        return $this->render('test',['myname'=>$name]);
    }
    
    public function actionPerson() {
        $model=new PersonForm;
        if($model->load(Yii::$app->request->post())){
            $value=$_POST['PersonForm'];
        }else{
            $value=NULL;
        }
            
        
        return $this->render('person',['model'=>$model,'value'=>$value]);
        
        
        
        
    }

    

    public function  getname(){
        $name='สุจินต์ สุกกล้า';
        return $name;
        
    }
}