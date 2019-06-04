<?php $form = \yii\widgets\ActiveForm::begin();?>
<?=$form->field($model,'val');?>
<?= \yii\helpers\Html::activeHiddenInput($model,'version',['value'=>$model->version]);?>
<?=\yii\helpers\Html::submitButton("add");?>

<?php \yii\widgets\ActiveForm::end();?>
