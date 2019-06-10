<?php $form = \yii\widgets\ActiveForm::begin();?>
<?=$form->field($model,'name')->textInput();?>
<?=\yii\helpers\Html::submitButton("submit");?>
<?php \yii\widgets\ActiveForm::end();
