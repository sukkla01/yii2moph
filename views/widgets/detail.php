<?php

use yii\widgets\DetailView;

$this->title='ข้อมูล'.$model->firstname;
echo DetailView::widget([
    'model'=>$model,
     'attributes' => [
         'firstname',
         'lastname',
         'address:html',
         'email',
     ]
]);