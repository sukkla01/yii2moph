
<?php

use yii\grid\GridView;
use yii\widgets\Pjax;

Pjax::begin();
echo GridView::widget([
    'dataProvider'=>$contact,
    'options'=>['class'=>'table-responsive']
]);
Pjax::end();
?>
