<?php foreach ($goods AS $good):?>
<div>
    <a href="<?=\yii\helpers\Html::a(\yii\helpers\Html::encode($good->name),1);?>"><?=\yii\helpers\Html::encode($good->name) ?></a>
</div>
<?php endforeach;?>
<div><?=\yii\widgets\LinkPager::widget(['pagination'=>$pagination]) ?></div>
