<?php
use \yii\helpers\Html;
?>
<?= Html::encode($name) ?>
<?php $form= \yii\widgets\ActiveForm::begin();?>
<?= $form->field($model,'name');?>
<?= $form->field($model,'pass');?>
<?= $form->field($model,'email');?>
<?= Html::submitButton('sub');?>
<?php \yii\widgets\ActiveForm::end();?>

