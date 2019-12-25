<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuratMasuk */
?>
<div class="surat-masuk-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'no_smasuk',
            'tgl_surat',
            'tgl_diterima',
            'sifat',
            'lampiran',
            'lampiran4',
            'nama_instansi',
            'lampiran1',
            'lampiran2',
            'lampiran3',
        ],
    ]) ?>

</div>
