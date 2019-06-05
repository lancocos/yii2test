<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
$form = ActiveForm::begin(['id'=>'abc']);?>
<?=$form->field($model,'name1')->textInput();?>
<?=$form->field($model,'name2')->passwordInput()->label("password");?>
<?=$form->field($model,'abc1')->radioList(['1'=>'abc','2'=>'bcd']);?>
<?=$form->field($model,'abc')->checkboxList(['1'=>'abc','2'=>'bcd']);?>
<?=Html::submitButton("submit");?>
<?php ActiveForm::end();?>


<div style="border:1px solid #ddd;">
    <?php
    Pjax::begin([
    // Pjax 配置项
    ]);
    $form = ActiveForm::begin([
    'options' => ['data' => ['pjax' => 0]],
    ]);
    ?>
<?=$form->field($model,'name1')->textInput();?>
<?=Html::submitButton("submit");?>
<?php
    ActiveForm::end();
    Pjax::end();
    ?>
</div>
<style>
    div.required label:after {
        content: " *";
        color: red;
    }
</style>
