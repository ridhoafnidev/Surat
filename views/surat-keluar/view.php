<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKeluar */
?>
<div class="surat-keluar-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'no_skeluar',
            'tgl_surat',
            'sifat',
            'lampiran',
            'nama_instansi',
            'lampiran1',
            'lampiran2',
            'lampiran3',
            'lampiran4',
        ],
    ]) ?>

</div>
