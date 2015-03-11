
<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider'=>$dataprovider,
    'options'=>['class'=>'table-responsive']
]);
?>
