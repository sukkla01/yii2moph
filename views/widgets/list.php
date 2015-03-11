<?php

use yii\widgets\ListView;
?>
<div class="row">
 <?php
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_contact',
]);
?>
</div>