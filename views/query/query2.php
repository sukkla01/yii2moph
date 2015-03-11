
<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider'=>$dataprovider,
    'options'=>['class'=>'table-responsive']
]);

echo GridView::widget([
    'dataProvider'=>$dataprovider1,
    'options'=>['class'=>'table-responsive']
]);

echo $test;
?>
