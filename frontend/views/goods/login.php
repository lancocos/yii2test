
<?php $form= \yii\widgets\ActiveForm::begin();?>
<?= $form->field($hello,'att1');?>
<?= $form->field($hello,'att2');?>
<?= $form->field($hello,'att3');?>
<?= \yii\helpers\Html::submitButton('sub');?>
<?php \yii\widgets\ActiveForm::end();?>