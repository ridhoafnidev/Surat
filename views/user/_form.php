<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pengguna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->dropDownList([ 'admin' => 'Admin', 'kepala instansi' => 'Kepala Instansi'], ['prompt' => '']) ?>

    <?php /* $form->field($model, 'authKey')->textInput(['maxlength' => true]) */?>

    <?php /* $form->field($model, 'accesToken')->textInput(['maxlength' => true]) */?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
