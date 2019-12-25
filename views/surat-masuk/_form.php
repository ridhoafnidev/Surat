<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\SuratMasuk */
/* @var $form yii\widgets\ActiveForm */
$url = Yii::$app->urlManagerFrontEnd->baseUrl;
?>

<div class="surat-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_smasuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_surat')->textInput(['maxlength' => true, 'type' => 'date']) ?>

    <?= $form->field($model, 'tgl_diterima')->textInput(['maxlength' => true, 'type' => 'date']) ?>

    <label>Sifat</label><p>

    <?= $form->field($model, 'sifat')->radio(['label' => 'Penting', 'value' => 'Penting', 'uncheck' => null]) ?>
    
    <?= $form->field($model, 'sifat')->radio(['label' => 'Umum', 'value' => 'Umum', 'uncheck' => null]) ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_instansi')->textInput(['maxlength' => true]) ?>

    <?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->lampiran1)){

                $img[] = $url.'/web/upload/masuk/'.$model->lampiran1;

                $json[] = [
                      'type' => "pdf", 'size' => 8000, 'caption' => $model->lampiran1, 'url' => '"'.$url.'"/web/upload/masuk/"'.$model->lampiran1.'"', 'key' => 10, 
                ];

            }
        ?>

     <?= $form->field($model, 'lampiran1')->widget(FileInput::className(),[
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showRemove'=> false,
            'showUpload' => false,
            'showCancel' => false,
            'overwriteInitial' => false,
            'initialPreviewConfig' => $json,
            'initialPreviewAsData'=> true,
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['pdf'],
        ]
     ])?>
    <?php else : ?>
         <?= $form->field($model, 'lampiran1')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>

    <?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->lampiran2)){
            
            $img[] = $url.'/web/upload/masuk/'.$model->lampiran2;

            $json[] = [
                  'type' => "pdf", 'size' => 8000, 'caption' => $model->lampiran2, 'url' => '"'.$url.'"/web/upload/masuk/"'.$model->lampiran2.'"', 'key' => 10, 
            ];
            }
        ?>

     <?= $form->field($model, 'lampiran2')->widget(FileInput::className(),[
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showRemove'=> false,
            'showUpload' => false,
            'showCancel' => false,
            'overwriteInitial' => false,
            'initialPreviewConfig' => $json,
            'initialPreviewAsData'=> true,
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['pdf'],
        ]
     ])?>
    <?php else : ?>
         <?= $form->field($model, 'lampiran2')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>

    <?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->lampiran3)){
            
                $img[] = $url.'/web/upload/masuk/'.$model->lampiran3;

                $json[] = [
                      'type' => "pdf", 'size' => 8000, 'caption' => $model->lampiran3, 'url' => '"'.$url.'"/web/upload/masuk/"'.$model->lampiran3.'"', 'key' => 10, 
                ];    

            }
        ?>

     <?= $form->field($model, 'lampiran3')->widget(FileInput::className(),[
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showRemove'=> false,
            'showUpload' => false,
            'showCancel' => false,
            'overwriteInitial' => false,
            'initialPreviewConfig' => $json,
            'initialPreviewAsData'=> true,
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['pdf'],
        ]
     ])?>
    <?php else : ?>
         <?= $form->field($model, 'lampiran3')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>

    <?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->lampiran4)){
            
            $img[] = $url.'/web/upload/masuk/'.$model->lampiran4;

            $json[] = [
                  'type' => "pdf", 'size' => 8000, 'caption' => $model->lampiran4, 'url' => '"'.$url.'"/web/upload/masuk/"'.$model->lampiran4.'"', 'key' => 10, 
            ]; 
            }
        ?>

     <?= $form->field($model, 'lampiran4')->widget(FileInput::className(),[
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showRemove'=> false,
            'showUpload' => false,
            'showCancel' => false,
            'overwriteInitial' => false,
            'initialPreviewConfig' => $json,
            'initialPreviewAsData'=> true,
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['pdf'],
        ]
     ])?>
    <?php else : ?>
         <?= $form->field($model, 'lampiran4')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
