<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\hoadonchitiet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoadonchitiet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_hd')->textInput() ?>

    <?= $form->field($model, 'id_sanpham')->textInput() ?>

    <?= $form->field($model, 'soluong')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
