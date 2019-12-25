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
            
                $img[] = Html::img($url.'/web/UploadedFileKeluar/'.$model->lampiran1, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->lampiran1, Url::to(['/file/delete-upload']),
                      'key' => 'lampiran1 '.  $model->lampiran1, 
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
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['jpg','png','jpeg'],
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
            
                $img[] = Html::img($url.'/web/UploadedFileKeluar/'.$model->lampiran2, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->lampiran2, Url::to(['/file/delete-upload']),
                      'key' => 'lampiran2 '.  $model->lampiran2, 
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
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['jpg','png','jpeg'],
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
            
                $img[] = Html::img($url.'/web/UploadedFileKeluar/'.$model->lampiran3, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->lampiran3, Url::to(['/file/delete-upload']),
                      'key' => 'lampiran3 '.  $model->lampiran3, 
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
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['jpg','png','jpeg'],
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
            
                $img[] = Html::img($url.'/web/UploadedFileKeluar/'.$model->lampiran4, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->lampiran4, Url::to(['/file/delete-upload']),
                      'key' => 'lampiran4'.  $model->lampiran4, 
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
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['jpg','png','jpeg'],
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
