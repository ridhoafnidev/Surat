<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'username',
            'password',
            'nama_pengguna',
            'level',
            //'authKey',
            //'accesToken',
        ],
    ]) ?>

</div>
